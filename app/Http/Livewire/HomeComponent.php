<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $news = News::paginate(3);
        return view('livewire.home-component',[
            'news' => $news
        ]);
    }
}
