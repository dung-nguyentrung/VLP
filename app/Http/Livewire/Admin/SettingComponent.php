<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class SettingComponent extends Component
{
    public $phone;
    public $fax;
    public $email;
    public $description;
    public $address;
    public $open_time;
    public $open_description;

    public function updated($fields){
        $this->validateOnly($fields,[
            'phone' => 'required|min:10',
            'fax' => 'required|min:10'
        ]);
    }

    public function updateSetting(){
        $this->validate([
            'phone' => 'required|min:10',
            'fax' => 'required|min:10'
        ]);

        $site = Setting::find(1)->first();
        $site->phone = $this->phone;
        $site->fax = $this->fax;
        $site->description = $this->description;
        $site->address = $this->address;
        $site->open_time = $this->open_time;
        $site->open_description = $this->open_description;
        $site->save();
        session()->flash('message','Cập nhật thông tin website thành công !');
    }

    public function mount(){
        $site = Setting::find(1)->first();
        $this->phone = $site->phone;
        $this->fax = $site->fax;
        $this->email = $site->email;
        $this->description = $site->description;
        $this->address = $site->address;
        $this->open_time = $site->open_time;
        $this->open_description = $site->open_description;
    }

    public function render()
    {
        return view('livewire.admin.setting-component')->layout('layouts.base');
    }
}
