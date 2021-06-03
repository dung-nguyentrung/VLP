<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PostCategory;

class UpdatePostCategoryComponent extends Component
{
    public $post_category_slug;
    public $post_category_id;
    public $name;
    public $slug;

    public function mount($post_category_slug){
        $this->post_category_slug = $post_category_slug;
        $category = PostCategory::where('slug',$this->post_category_slug)->first();
        $this->post_category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($field){
        $this->validateOnly($field,[
            'name' => 'required',
            'slug' => 'required'
        ],[
            'name.required' => 'Tên danh mục không được trống',
            'slug.required' => 'Đường dẫn không được trống'
        ]);
    }

    public function updatePostCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ],[
            'name.required' => 'Tên danh mục không được trống',
            'slug.required' => 'Đường dẫn không được trống'
        ]);
        $category = PostCategory::find($this->post_category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Cập nhật danh mục thành công !');
    }

    public function render()
    {
        return view('livewire.admin.update-post-category-component')->layout('layouts.base');
    }
}
