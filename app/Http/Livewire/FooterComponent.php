<?php

namespace App\Http\Livewire;

use App\Models\NewsLetter;
use App\Models\Setting;
use Livewire\Component;

class FooterComponent extends Component
{
    public $email;

    public function updated($field){
        $this->validateOnly($field,[
            'email' => 'required|email'
        ],[
            'email.required' => 'Email không được để trống !',
            'email.email' => 'Bạn phải nhập đúng định dạng của email!'
        ]);
    }

    public function storeNewsLetter(){
        $this->validate([
            'email' => 'required|email'
        ],[
            'email.required' => 'Email không được để trống !',
            'email.email' => 'Bạn phải nhập đúng định dạng của email!'
        ]);
        $newsletter = new NewsLetter();
        $newsletter->email = $this->email;
        $newsletter->save();
        session()->flash('message_email','Bạn đã đăng ký nhận tin tức từ chúng tôi thành công !');
    }
    public function render()
    {
        $setting = Setting::first();
        return view('livewire.footer-component',['setting' => $setting]);
    }
}
