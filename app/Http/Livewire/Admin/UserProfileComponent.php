<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class UserProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $phone;
    public $email;
    public $address;
    public $new_image;
    public $profile_photo_path;

    public function mount(){
        $this->name = Auth::user()->name;
        $this->phone = Auth::user()->phone;
        $this->email = Auth::user()->email;
        $this->address = Auth::user()->address;
        $this->profile_photo_path = Auth::user()->profile_photo_path;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
            'email' => 'required|email',
            'address' => 'required',
            'profile_photo_path' => 'required|max:2048',
        ]);
    }

    public function updateProfile(){
        $this->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
            'email' => 'required|email',
            'address' => 'required',
            'profile_photo_path' => 'required|max:2048',
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->phone = $this->phone;
        $user->email = $this->email;
        if($this->new_image){
            $imageName = Carbon::now()->timestamp. '.' .$this->new_image->extension();
            $this->new_image->storeAs('users',$imageName);
            $user->profile_photo_path = $imageName;
        }
        $user->address = $this->address;
        $user->save();
        session()->flash('message','Cập nhật thông tin người dùng thành công !');
    }

    public function render()
    {
        return view('livewire.admin.user-profile-component')->layout('layouts.base');
    }
}
