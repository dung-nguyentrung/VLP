<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AddPostComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $post_category_id;
    public $user_id;

    public function mount(){
        $this->post_category_id = PostCategory::first()->id;
        $this->user_id = Auth::user()->id;
    }

    public function generateslug(){
        $this->slug = Str::slug($this->title);
    }

    public function updated($field){
        $this->validateOnly($field,[
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'required|image',
        ],[
            'title.required' => 'Tiêu dề không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'content.required' => 'Nội dung không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng của hình ảnh'
        ]);
    }

    public function storeNew(){
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'image',
        ],[
            'title.required' => 'Tiêu dề không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'content.required' => 'Nội dung không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng của hình ảnh'
        ]);
        $new = new News();
        $new->title = $this->title;
        $new->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('blog',$imageName);
        $new->image = $imageName;
        $new->content = $this->content;
        $new->user_id = $this->user_id;
        $new->post_category_id = $this->post_category_id;
        $new->save();
        session()->flash('message','Thêm bài viết thành công !');
    }

    public function render()
    {
        $post_categories = PostCategory::all();
        return view('livewire.admin.add-post-component',[
            'post_categories' => $post_categories,
        ])->layout('layouts.base');
    }
}
