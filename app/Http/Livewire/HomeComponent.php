<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use App\Models\News;
use App\Models\Partner;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $news = News::paginate(3);
        $sliders = Slider::all();
        $partners = Partner::all();
        $faqs = Faq::all();
        return view('livewire.home-component',[
            'news' => $news,
            'sliders' => $sliders,
            'partners' => $partners,
            'faqs' => $faqs
        ]);
    }
}
