<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class OrderComponent extends Component
{
    public function viewAllOrder(){
        $orders = Order::where('notify',1)->get();
        foreach ($orders as $order){
            $order->notify = '0';
            $order->save();
        }
    }

    public function confirmOrder($id){
        $transaction = Transaction::where('order_id',$id)->first();
        $transaction->status = 'Đã xử lý';
        $transaction->save();
        session()->flash('message','Xác nhận đơn hàng thành công!');
        return redirect()->to('orders');
    }

    use WithPagination;
    public function render()
    {
        $this->viewAllOrder();
        $orders = Order::paginate(6);
        return view('livewire.admin.order-component',['orders' => $orders])->layout('layouts.base');
    }
}
