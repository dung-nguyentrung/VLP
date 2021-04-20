<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordComponent extends Component
{
    public $password;
    public $new_password;
    public $confirm_password;

    public function updatePassword(){
        $this->validate([
            'password' => ['required', new MatchOldPassword],
            'new_password' => 'required|min:8',
            'confirm_password' => 'same:new_password',
        ]);

        User::find(Auth::user()->id)->update(['password' => Hash::make($this->new_password)]);

        session()->flash('message','Cập nhật mật khẩu thành công !');
    }

    public function render()
    {
        return view('livewire.admin.change-password-component')->layout('layouts.base');
    }
}
