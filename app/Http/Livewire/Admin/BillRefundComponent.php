<?php

namespace App\Http\Livewire\Admin;

use App\Models\Debt;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Setting;
use Livewire\Component;

class BillRefundComponent extends Component
{
    public $debt_id;

    public function mount($debt_id){
        $this->debt_id = $debt_id;
    }

    public function render()
    {
        $site = Setting::first();
        $payment = Payment::where('id',$this->debt_id)->first();
        $order = Order::where('id',$payment->order_id)->first();
        $items = OrderItem::where('order_id',$order->id)->get();

        return view('livewire.admin.bill-refund-component',[
            'site' => $site,
            'order' => $order,
            'items' => $items,
            'payment' => $payment
        ])->layout('layouts.base');
    }
}
