<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UpdateStaffComponent extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $utype;
    public function mount($user_id){
        $this->user_id = $user_id;
        $user = User::find($user_id);
        $this->utype = $user->utype;
        $this->name= $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->address = $user->address;
    }

    public function updated($field){
        $this->validateOnly($field,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'utype' => 'required',
        ],[
            'name.requried' => 'Tên nhân viên không được trống',
            'email.required' => 'Email không được trống',
            'email.email' => 'Nhập đúng định dạng email',
            'phone.required' => 'Điện thoại không được trống',
            'address.required' => 'Địa chỉ không được trống',
            'utype.required' => 'Chức vụ không được trống'
        ]);
    }

    public function updateUser(){
        $this->validate([
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required',
           'address' => 'required',
           'utype' => 'required',
        ],[
            'name.requried' => 'Tên nhân viên không được trống',
            'email.required' => 'Email không được trống',
            'email.email' => 'Nhập đúng định dạng email',
            'phone.required' => 'Điện thoại không được trống',
            'address.required' => 'Địa chỉ không được trống',
            'utype.required' => 'Chức vụ không được trống'
        ]);
        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->address = $this->address;
        $user->utype = $this->utype;
        $user->save();
        session()->flash('message','Cập nhật nhân viên thành công');
    }
    public function render()
    {
        return view('livewire.admin.update-staff-component')->layout('layouts.base');
    }
}
