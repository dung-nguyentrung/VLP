<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-component')->layout('layouts.base');
    }
}
