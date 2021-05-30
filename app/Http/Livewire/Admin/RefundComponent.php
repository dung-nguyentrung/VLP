<?php

namespace App\Http\Livewire\Admin;

use App\Models\Debt;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RefundComponent extends Component
{
    public $order_id;
    public $user_id;
    public $username;
    public $order;
    public $total;
    public $pay;
    public $reason;
    public function mount($order_id){
        $this->order_id = $order_id;
        $debt = Debt::where('order_id',$this->order_id)->first();
        $this->username = $debt->user->name;
        $this->user_id = $debt->user->id;
        $this->order = $debt->order_id;
        $this->total = $debt->total;
        $this->pay = $debt->paid;
    }

    public function storeBill()
    {
        $isPayment = Payment::where('order_id', $this->order_id)->first();
        if ($isPayment == null){
            $payment = new Payment();
            $payment->order_id = $this->order_id;
            $payment->user_id = $this->user_id;
            $payment->total = $this->total;
            $payment->paid = $this->pay;
            $payment->reason = $this->reason;
            $payment->staff_name = Auth::user()->name;
            $payment->save();

            $id = $payment->id;

            $debt = Debt::where('order_id',$this->order_id)->first();
            $debt->paid = 0;
            $debt->owe = $this->pay + $debt->owe;
            $debt->save();

        }
        else{
            $payment = Payment::where('order_id',$this->order_id)->first();
            $payment->paid = $this->pay;
            $payment->reason = $this->reason;
            $payment->staff_name = Auth::user()->name;
            $payment->save();
            $debt = Debt::where('order_id',$this->order_id)->first();
            $debt->paid = 0;
            $debt->owe = $this->pay + $debt->owe;
            $debt->save();

            $id = $isPayment->id;
        }
        return redirect()->route('bill.print',['debt_id' => $id]);
    }

    public function render()
    {
        $debt = Debt::where('order_id',$this->order_id)->first();
        $orderItems = OrderItem::where('order_id',$this->order_id)->get();
        return view('livewire.admin.refund-component',[
            'debt' => $debt,
            'orderItems' => $orderItems
        ])->layout('layouts.base');
    }
}
