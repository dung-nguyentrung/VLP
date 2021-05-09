<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::where('utype','USR')->paginate(10);
        return view('livewire.admin.customer-component',[
            'users' => $users
        ])->layout('layouts.base');
    }
}
