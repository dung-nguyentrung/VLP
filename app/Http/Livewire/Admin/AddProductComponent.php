<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddProductComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-product-component')->layout('layouts.base');
    }
}
