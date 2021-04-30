<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use App\Models\PostCategory;
use Livewire\WithPagination;

class SearchNewComponent extends Component
{
    public $keyword;

    public function mount(){
        $this->fill(request()->only('keyword'));
    }

    use WithPagination;
    public function render()
    {
        $new = News::find(1);
        $news = News::where('title','like','%'.$this->keyword .'%')->paginate(4);
        $populars = News::inRandomOrder()->limit(3)->get();
        $post_categories = PostCategory::all();
        return view('livewire.search-new-component',[
            'news' => $news,
            'new' => $new,
            'populars' => $populars,
            'post_categories' => $post_categories
            ]);
    }
}
