<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RevenueComponent extends Component
{
    public function render()
    {
        $revenue = Order::select(DB::raw('SUM(total) as total'))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))->pluck('total');
        $months = Order::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))->pluck('month');

        $datas = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($months as $index => $month){
            $month--;
            $datas[$month] = $revenue[$index];
        }

        return view('livewire.revenue-component',[
            'datas' => $datas
        ]);
    }
}
