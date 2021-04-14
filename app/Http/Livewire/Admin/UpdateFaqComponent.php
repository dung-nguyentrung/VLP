<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use Livewire\Component;

class UpdateFaqComponent extends Component
{
    public $faq_id;
    public $question;
    public $content;

    public function mount($faq_id){
        $this->faq_id = $faq_id;
        $faq = Faq::where('id',$this->faq_id)->first();
        $this->question = $faq->question;
        $this->content = $faq->content;
    }

    public function updateFaq(){
        $faq = Faq::find($this->faq_id);
        $faq->question = $this->question;
        $faq->content = $this->content;
        $faq->save();
        session()->flash('message','Cập nhật câu hỏi thành công !');
    }

    public function render()
    {
        return view('livewire.admin.update-faq-component')->layout('layouts.base');
    }
}
