<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class UpdateCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;

    public function mount($category_slug){
        $this->category_slug = $category_slug;
        $category = Category::where('slug',$this->category_slug)->first();
        $this->category_id = $category->id;
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

    public function updateCategory(){
        $this->validate([
           'name' => 'required',
           'slug' => 'required'
        ],[
            'name.required' => 'Tên danh mục không được trống',
            'slug.required' => 'Đường dẫn không được trống'
        ]);
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Cập nhật danh mục sản phẩm thành công !');
    }

    public function render()
    {
        return view('livewire.admin.update-category-component')->layout('layouts.base');
    }
}
