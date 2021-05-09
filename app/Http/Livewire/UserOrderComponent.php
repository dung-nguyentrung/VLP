<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserOrderComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $orders = Order::where('user_id',Auth::user()->id)->paginate(5);
        $populars = Product::InRandomOrder()->limit(6)->get();
        return view('livewire.user-order-component',[
            'orders' => $orders,
            'populars' => $populars,
        ]);
    }
}
