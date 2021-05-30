<?php

namespace App\Http\Controllers;

use App\Models\Reciept;
use Exception;
use App\Models\Debt;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Srmklive\PayPal\Services\ExpressCheckout;
use Symfony\Component\VarDumper\VarDumper;

class CartController extends Controller
{

    public function store(Request $request){
        $product_id = $request->id;
        $product_name = $request->name;
        $product_price = $request->price;
        Cart::add($product_id,$product_name,100,$product_price)->associate('App\Models\Product');
        session()->flash('message','Sản phẩm đã được thêm vào giỏ hàng !');
        return redirect()->route('product.cart');
    }

    public function updateCart(Request $request){
        $request->validate([
            'qty' => 'required|integer|min:100',
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
                'subtotal' => (float)str_replace(',','',$subtotal),
                'tax' => (float)str_replace(',','',$tax),
                'total' => (float)str_replace(',','',$total),
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

    public function makeDebt($order_id){
        $debt = new Debt();
        $debt->user_id = Auth::user()->id;
        $debt->order_id = $order_id;
        $debt->total = session()->get('checkout')['total'];
        $debt->paid = 0;
        $debt->owe = session()->get('checkout')['total'];
        $debt->save();
    }

    public function makeReciept($order_id){
        $reciept = new Reciept();
        $reciept->user_id = Auth::user()->id;
        $reciept->order_id = $order_id;
        $reciept->total = session()->get('checkout')['total'];
        $reciept->paid = 0;
        $reciept->owe = session()->get('checkout')['total'];
        $reciept->refund = 0;
        $reciept->save();
    }

    public function updateUser(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address.', '.$request->city.', '.$request->province;
        $user->save();
    }

    public function orderCheckout(Request $request){
        $vaidator = $this->validate($request,[
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zipcode' => 'required',
            'line1' => 'required'
        ]);
        $order = new Order();
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->name = $request->name;
        $order->company = $request->company;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->province = $request->province;
        $order->zipcode = $request->zipcode;
        $order->line1 = $request->line1;
        $order->line2 = $request->line2;
        $order->user_id = Auth::user()->id;
        $order->save();

        $this->updateUser($request);

        foreach (Cart::content() as $item){
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
            $product = Product::find($item->id);
            $product->quantity = $product->quantity - $item->qty;
            $product->save();
        }

        $this->makeTransaction($order->id,"Đang chờ xử lý");

        $this->makeDebt($order->id);

        $this->makeReciept($order->id);

        $this->resetCart();
        return redirect()->route('thankyou');
    }

    public function cancelOrder(Request $request){
        $order = Order::where('id',$request->order_id)->first();
        $order->status = 'Đã hủy';
        $order->save();
        $transaction = Transaction::where('order_id',$order->id)->first();
        $transaction->status = 'Đã hủy';
        $transaction->save();
        session()->flash('message','Huỷ đơn hàng thành công!');
        return redirect()->route('user.order');
    }
}
