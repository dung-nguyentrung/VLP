<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DashboardComponent extends Component
{
    public function render()
    {
        $now = Carbon::now();
        $total = Order::whereMonth('created_at',$now->month)->sum('total');
        $order = Order::count();
        $total_week = Order::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total');
        if($total == 0){
            $avg = 0;
        }else{
            $avg = $total/$order;
        }

        return view('livewire.admin.dashboard-component',[
            'total' => $total,
            'order' => $order,
            'now' => $now,
            'avg' => $avg,
            'total_week' => $total_week,
//            'datas' => $datas
        ])->layout('layouts.base');
    }
}
