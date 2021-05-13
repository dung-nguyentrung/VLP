<?php

namespace App\Http\Livewire\Admin;

use App\Models\NewsLetter;
use App\Models\Recruitment;
use App\Models\Order;
use Livewire\Component;

class NavBarComponent extends Component
{
    public function render()
    {
        $orders = Order::where('notify',1)->limit(4)->get();
        $news_letters = NewsLetter::where('notify',1)->limit(4)->get();
        $recruitments = Recruitment::where('notify',1)->limit(4)->get();
        return view('livewire.admin.nav-bar-component',[
            'orders' => $orders,
            'news_letters' => $news_letters,
            'recruitments' => $recruitments
            ]);
    }
}
