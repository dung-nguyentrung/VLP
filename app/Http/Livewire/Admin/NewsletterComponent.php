<?php

namespace App\Http\Livewire\Admin;

use App\Models\NewsLetter;
use Livewire\Component;

class NewsletterComponent extends Component
{
    public function viewAllNewsletter(){
        $news_letters = NewsLetter::where('notify',1)->get();
        foreach ($news_letters as $news_letter){
            $news_letter->notify = '0';
            $news_letter->save();
        }
    }

    public function render()
    {
        $this->viewAllNewsletter();
        return view('livewire.admin.newsletter-component')->layout('layouts.base');
    }
}
