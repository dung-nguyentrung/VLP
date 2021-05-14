<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class StaffComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.staff-component')->layout('layouts.base');
    }
}
