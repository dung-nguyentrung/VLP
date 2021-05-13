<?php

namespace App\Http\Livewire;

use App\Models\CommentPost;
use App\Models\News;
use Livewire\Component;
use App\Models\PostCategory;

class NewDetailsComponent extends Component
{
    public $new_slug;

    public function mount($new_slug){
        $this->new_slug = $new_slug;
    }

    public function increaseView(){
        $new = News::where('slug',$this->new_slug)->first();
        News::find($new->id)->increment('view_count');
    }

    public function render()
    {
        $this->increaseView();
        $new = News::where('slug',$this->new_slug)->first();
        $populars = News::inRandomOrder()->limit(3)->get();
        $post_categories = PostCategory::all();
        $comments = CommentPost::where('new_id',$new->id)->get();
        return view('livewire.new-details-component',[
            'new' => $new,
            'populars' => $populars,
            'post_categories' => $post_categories,
            'comments' => $comments
            ]);
    }
}
