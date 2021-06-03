<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use Livewire\Component;

class AddFaqComponent extends Component
{
    public $question;
    public $content;

    public function updated($field){
        $this->validateOnly($field,[
           'question' => 'required',
           'content' => 'required'
        ],[
            'question.required' => 'Câu hỏi không được trống',
            'content.required' => 'Nội dung không được trống'
        ]);
    }

    public function storeFaq(){
        $this->validate([
            'question' => 'required',
            'content' => 'required'
        ],[
            'question.required' => 'Câu hỏi không được trống',
            'content.required' => 'Nội dung không được trống'
        ]);
        $faq = new Faq();
        $faq->question = $this->question;
        $faq->content = $this->content;
        $faq->save();
        session()->flash('message','Thêm câu hỏi thường gặp thành công !');
    }
    public function render()
    {
        return view('livewire.admin.add-faq-component')->layout('layouts.base');
    }
}
