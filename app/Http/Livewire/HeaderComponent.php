<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class HeaderComponent extends Component
{
    public function render()
    {
        $setting = Setting::first();
        return view('livewire.header-component',['setting' => $setting]);
    }
}
