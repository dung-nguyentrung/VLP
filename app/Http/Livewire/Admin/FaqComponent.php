<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class FaqComponent extends Component
{
    use WithPagination;

    public function deleteFaq($id){
        $faq = Faq::find($id);
        $faq->delete();
        session()->flash('message','Xoá câu hỏi thành công !');
    }

    public function render()
    {
        $faqs = Faq::paginate(8);
        return view('livewire.admin.faq-component',['faqs' => $faqs])->layout('layouts.base');
    }
}
