<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use App\Models\PostCategory;
use Livewire\WithPagination;

class NewsCategoryComponent extends Component
{
    public $slug;
    public $keyword;

    public function mount($slug){
        $this->slug = $slug;
        $this->fill(request()->only('keyword'));
    }

    use WithPagination;
    public function render()
    {
        $new = News::find(1);
        $category = PostCategory::where('slug',$this->slug)->first();
        $news = News::where('post_category_id',$category->id)->paginate(4);
        $populars = News::inRandomOrder()->limit(3)->get();
        $post_categories = PostCategory::all();
        return view('livewire.news-category-component',[
            'news' => $news,
            'new' => $new,
            'populars' => $populars,
            'post_categories' => $post_categories
            ]);
    }
}
