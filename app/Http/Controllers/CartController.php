<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

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
            'paymentmode' => 'required'
        ]);
        $order = new Order();
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
        $paymentmode = $request->paymentmode;
        if($paymentmode == "cod"){
            $transaction = new Transaction();
            $transaction->order_id = $order->id;
            $transaction->mode = "Thanh toán trực tiếp";
            $transaction->status = "Đang chờ xử lý";
            $transaction->save();
        }

        Cart::destroy();
        session()->forget('checkout'); //Huy session checkout

        return redirect()->route('thankyou');
    }
}
