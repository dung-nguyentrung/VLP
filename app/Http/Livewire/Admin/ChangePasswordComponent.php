<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ChangePasswordComponent extends Component
{
    public $password;
    public $new_password;
    public $confirm_password;
    public function updatePassword(){
    }

    public function render()
    {
        return view('livewire.admin.change-password-component')->layout('layouts.base');
    }
}
