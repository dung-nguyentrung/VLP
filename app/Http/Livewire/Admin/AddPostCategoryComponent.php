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

    public function storePostCategory(){
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
