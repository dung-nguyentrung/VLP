<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Debt;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Srmklive\PayPal\Services\ExpressCheckout;

class CartController extends Controller
{
    public function store(Request $request){
        $product_id = $request->id;
        $product_name = $request->name;
        $product_price = $request->price;
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('message','Sản phẩm đã được thêm vào giỏ hàng !');
        return redirect()->route('product.cart');
    }

    public function updateCart(Request $request){
        $request->validate([
            'qty' => 'required|integer',
        ]);
        $row_id = $request->rowId;
        $qty = $request->qty;
        Cart::update($row_id,$qty);
        session()->flash('message','Cập nhật giỏ hàng thành công !');
        return redirect()->route('product.cart');
    }

    public function deleteCart(Request $request){
        $row_id = $request->rowId;
        Cart::remove($row_id);
        session()->flash('message','Xóa sản phẩm giỏ hàng thành công !');
        return redirect()->route('product.cart');
    }

    public function destroyCart(){
        Cart::destroy();
        session()->flash('message','Xóa toàn bộ sản phẩm giỏ hàng thành công !');
        return redirect()->route('product.cart');
    }

    public function checkout(Request $request){
        if (Auth::check()){
            if(!Cart::count() > 0){
                session()->forget('checkout');
                return;
            }
            //Set session checkout
            $subtotal = $request->subtotal;
            $tax = $request->tax;
            $total = $request->total;
            session()->put('checkout',[
                'subtotal' => $subtotal,
                'tax' => $tax,
                'total' => $total,
            ]);
            return redirect()->route('checkout');
        }else{
            return redirect()->route('login');
        }
    }

    public function makeTransaction($order_id,$status){
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order_id;
        $transaction->mode = "Thanh toán trực tiếp";
        $transaction->status = $status;
        $transaction->save();
    }

    public function resetCart(){
        Cart::destroy();
        session()->forget('checkout'); //Huy session checkout
    }

    public function makeDebt($order_id,$paid,$owe,$status){
        $debt = new Debt();
        $debt->user_id = Auth::user()->id;
        $debt->order_id = $order_id;
        $debt->total = session()->get('checkout')['total'];
        $debt->paid = $paid;
        $debt->owe = $owe;
        $debt->status = $status;
    }

    public function updateUser(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address.', '.$request->city.', '.$request->province;
        $user->save();
    }

    public function orderCheckout(Request $request){
        //validate data
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zipcode' => 'required',
            'line1' => 'required',
            'paymentMode' => 'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->name = $request->name;
        $order->company = $request->company;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->line1 = $request->line1;
        $order->line2 = $request->line2;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->province = $request->province;
        $order->zipcode = $request->zipcode;
        $order->status = "Đã đặt hàng";
        $order->save();

        $this->updateUser($request);

        //detail order
        foreach(Cart::content() as $item){
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }
        //shipping on delivery
        $paymentMode = $request->paymentMode;
        if($paymentMode == "cod"){
            $this->makeTransaction($order->id,"Đang chờ xử lý");
            $this->makeDebt($order->id,0,0,"Còn nợ");
            $this->resetCart();
            return redirect()->route('thankyou');
        }else if ($paymentMode == "card"){
            $request->validate([
                'number_no' => 'required|integer',
                'expiry_month' => 'required|integer',
                'expiry_year' => 'required|integer',
                'CVC' => 'required'
            ]);

            $stripe = Stripe::make(env('STRIPE_KEY'));

            try{
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number_no' => $request->number_no,
                        'expiry_month' => $request->expiry_month,
                        'expiry_year' => $request->expiry_year,
                        'cvc' => $request->CVC,
                    ]
                ]);

                if(!isset($token['id'])){
                    session()->flash('stripe_error','Mã stripe không được tạo ra một cách chính xác');
                }

                $customer = $stripe->customers()->create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => [
                        'address' => $request->address,
                        'line1' => $request->line1,
                        'postal_code' => $request->zipcode,
                        'city' => $request->city,
                        'province' => $request->province,
                    ],
                    'shipping' => [
                        'name' => $request->name,
                        'address' => [
                            'address' => $request->address,
                            'line1' => $request->line1,
                            'postal_code' => $request->zipcode,
                            'city' => $request->city,
                            'province' => $request->province,
                        ],
                    ],
                    'source' => $token['id'],
                ]);

                $charge = $stripe->charges()->create([
                    'customer' => $customer['id'],
                    'currency' => "VND",
                    'amount' => session()->get('checkout')['total'],
                    'description' => 'Thanh toán cho đơn hàng '.$order->id,
                ]);

                if ($charge['status'] == "succeeded"){
                    $this->makeTransaction($order->id,'Đã thanh toán');
                    $this->resetCart();
                    return redirect()->route('thankyou');
                }else{
                    session()->flash('stripe_error','Lỗi khi thanh toán');
                }
            }catch(Exception $e){
                session()->flash('stripe_error', $e->getMessage());
            }
        }
    }
}
