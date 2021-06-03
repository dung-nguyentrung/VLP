<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class AddCategoryComponent extends Component
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

    public function storeCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ],[
            'name.required' => 'Tên danh mục không được trống',
            'slug.required' => 'Đường dẫn không được trống'
        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Thêm danh mục sản phẩm thành công !');
    }

    public function render()
    {
        return view('livewire.admin.add-category-component')->layout('layouts.base');
    }
}
