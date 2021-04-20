<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserProfileComponent extends Component
{
    public $name;
    public $phone;
    public $email;
    public $address;

    public function mount(){
        $this->name = Auth::user()->name;
        $this->phone = Auth::user()->phone;
        $this->email = Auth::user()->email;
        $this->address = Auth::user()->address;
    }

    public function updateProfile(){
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->phone = $this->phone;
        $user->email = $this->email;
        $user->address = $this->address;
        $user->save();
        session()->flash('message','Cập nhật thông tin người dùng thành công !');
    }

    public function render()
    {
        return view('livewire.admin.user-profile-component')->layout('layouts.base');
    }
}
