<?php

namespace App\Http\Livewire\Admin;

use App\Models\Debt;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InvoiceComponent extends Component
{
    public $user_id;
    public $order_id;
    public $total;
    public $pay;
    public  function mount(){
        $user = User::where('utype','USR')->first();
        $order = Order::first();
        $this->user_id = $user->id;
        $this->order_id = $order->id;
        $this->total = $order->total;
    }

    public function checkout(){
        $debt = new Debt();
        $debt->user_id = $this->user_id;
        $debt->order_id = $this->order_id;
        $debt->total = $this->total;
        if($this->pay >= $this->total){
            $debt->paid = $this->total;
            $debt->owe = 0;
            $debt->refund = $this->pay - $this->total;
            $transaction = Transaction::where('order_id',$this->order_id)->first();
            $transaction->status = 'Đã thanh toán';
            $transaction->save();
        }else{
            $debt->paid = $this->pay;
            $debt->owe = $this->total - $this->pay;
            $debt->refund = 0;
        }
        $debt->staff_name = Auth::user()->name;
        $debt->save();
        session()->flash('message','Thanh toán đơn hàng thành công');
        return redirect()->route('orders');
    }

    public function render()
    {
        $users = User::where('utype','USR')->paginate(10);
        $orders = Order::where('user_id',$this->user_id)->get();
        $orderItems = OrderItem::where('order_id',$this->order_id)->get();
        return view('livewire.admin.invoice-component',[
            'users' => $users,
            'orders' => $orders,
            'orderItems' => $orderItems
        ])->layout('layouts.base');
    }
}
