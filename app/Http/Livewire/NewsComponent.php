<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\PostCategory;
use Livewire\Component;
use Livewire\WithPagination;

class NewsComponent extends Component
{
    public $keyword;

    public function mount(){
        $this->fill(request()->only('keyword'));
    }

    use WithPagination;
    public function render()
    {
        $new = News::find(1);
        $news = News::paginate(4);
        $populars = News::inRandomOrder()->limit(3)->get();
        $post_categories = PostCategory::all();
        return view('livewire.news-component',[
            'news' => $news,
            'new' => $new,
            'populars' => $populars,
            'post_categories' => $post_categories
            ]);
    }
}
