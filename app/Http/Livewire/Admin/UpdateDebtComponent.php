<?php

namespace App\Http\Livewire\Admin;

use App\Models\Debt;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Reciept;
use Livewire\Component;

class UpdateDebtComponent extends Component
{
    public $order_id;
    public $username;
    public $order;
    public $total;
    public $paid;
    public $owe;
    public $pay;
    public function mount($order_id){
        $this->order_id = $order_id;
        $reciept = Reciept::where('order_id',$this->order_id)->first();
        $this->username = $reciept->user->name;
        $this->order = $reciept->order_id;
        $this->total = $reciept->total;
        $this->paid = $reciept->paid;
        $this->owe = $reciept->owe;
    }

    public function changeStatusOrder($order_id){
        $order = Order::where('id',$order_id)->first();
        $order->status = 'Đã thanh toán';
        $order->save();
    }

    public function adjust(){
        $reciept = Reciept::where('order_id',$this->order_id)->first();
        $debt = Debt::where('order_id',$this->order_id)->first();
        if (($this->pay + $this->paid) >= $this->total){
            $reciept->paid = $this->total;
            $reciept->owe = 0;
            $reciept->refund = ($this->paid + $this->pay) - $this->total;
            $this->changeStatusOrder($this->order_id);
            $debt->paid = $this->total;
            $debt->owe = 0;
        }else{
            $reciept->paid = $this->paid + $this->pay;
            $reciept->owe = $this->total - ($this->paid + $this->pay);
            $reciept->refund = 0;
            $debt->paid = $this->paid + $this->pay;
            $debt->owe = $this->total - ($this->paid + $this->pay);
        }
        $reciept->save();
        $debt->save();
        session()->flash('message','Điều chỉnh phiếu thu thành công !');
        return redirect()->route('debt.update',['order_id' => $this->order_id]);
    }

    public function render()
    {
        $reciept = Reciept::where('order_id',$this->order_id)->first();
        $orderItems = OrderItem::where('order_id',$this->order_id)->get();
        return view('livewire.admin.update-debt-component',[
            'reciept' => $reciept,
            'orderItems' => $orderItems
        ])->layout('layouts.base');
    }
}
