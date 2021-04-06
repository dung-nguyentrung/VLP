<?php

namespace App\Http\Livewire;

use App\Models\NewsLetter;
use App\Models\Setting;
use Livewire\Component;

class FooterComponent extends Component
{
    public $email;

    public function storeNewsLetter(){
        $newsletter = new NewsLetter();
        $newsletter->email = $this->email;
        $newsletter->save();
        session()->flash('message','Bạn đã đăng ký nhận tin tức từ chúng tôi thành công !');
    }
    public function render()
    {
        $setting = Setting::first();
        return view('livewire.footer-component',['setting' => $setting]);
    }
}
