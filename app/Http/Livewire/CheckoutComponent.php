<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public $paymentMode;

    public function render()
    {
        return view('livewire.checkout-component');
    }
}
