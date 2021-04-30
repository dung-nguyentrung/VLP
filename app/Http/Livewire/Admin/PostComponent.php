<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;

    public function deletePost($id){
        $post = News::find($id);
        $post->delete();
        session()->flash('message','Xóa bài viết thành công !');
    }

    public function render()
    {
        $posts = News::paginate(5);
        return view('livewire.admin.post-component',[
            'posts' => $posts
        ])->layout('layouts.base');
    }
}
