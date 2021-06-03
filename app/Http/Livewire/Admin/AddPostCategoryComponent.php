<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PostCategory;

class AddPostCategoryComponent extends Component
{
    public $name;
    public $slug;

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

    public function storePostCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ],[
            'name.required' => 'Tên danh mục không được trống',
            'slug.required' => 'Đường dẫn không được trống'
        ]);
        $category = new PostCategory();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Thêm danh mục thành công !');
    }
    public function render()
    {
        return view('livewire.admin.add-post-category-component')->layout('layouts.base');
    }
}
