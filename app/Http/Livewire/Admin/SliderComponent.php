<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SliderComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.slider-component')->layout('layouts.base');
    }
}
