<?php

namespace App\Http\Controllers;

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
}
