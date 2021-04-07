<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Setting;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $setting = Setting::first();
        return view('livewire.contact-component',['setting' => $setting]);
    }
}
