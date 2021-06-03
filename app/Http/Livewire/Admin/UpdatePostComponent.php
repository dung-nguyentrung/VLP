<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UpdatePostComponent extends Component
{
    use WithFileUploads;
    public $post_slug;
    public $post_id;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $new_image;
    public $post_category_id;
    public $user_id;

    public function generateslug(){
        $this->slug = Str::slug($this->title);
    }

    public function updated($field){
        $this->validateOnly($field,[
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'new_image' => 'image',
        ],[
            'title.required' => 'Tiêu dề không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'content.required' => 'Nội dung không được trống',
            'new_image.image' => 'Nhập đúng định dạng của hình ảnh'
        ]);
    }

    public function mount($post_slug){
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'new_image' => 'image',
        ],[
            'title.required' => 'Tiêu dề không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'content.required' => 'Nội dung không được trống',
            'new_image.image' => 'Nhập đúng định dạng của hình ảnh'
        ]);
        $this->post_slug = $post_slug;
        $new = News::where('slug',$this->post_slug)->first();
        $this->post_id = $new->id;
        $this->title = $new->title;
        $this->slug = $new->slug;
        $this->content = $new->content;
        $this->image = $new->image;
        $this->post_category_id = $new->post_category_id;
        $this->user_id = Auth::user()->id;
    }

    public function updateNew(){
        $new = News::find($this->post_id);
        $new->title = $this->title;
        $new->slug = $this->slug;
        $new->content = $this->content;
        if($this->new_image){
            $imageName = Carbon::now()->timestamp. '.' .$this->new_image->extension();
            $this->new_image->storeAs('blog',$imageName);
            $new->image = $imageName;
        }
        $new->post_category_id = $this->post_category_id;
        $new->user_id = $this->user_id;
        $new->save();
        session()->flash('message','Cập nhật bài viết thành công !');
    }

    public function render()
    {
        $post_categories = PostCategory::all();
        return view('livewire.admin.update-post-component',[
            'post_categories' => $post_categories,
        ])->layout('layouts.base');
    }
}
