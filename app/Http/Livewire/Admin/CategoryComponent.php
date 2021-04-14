<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Xóa danh mục sản phẩm thành công !');
    }

    public function render()
    {
        $categories = Category::paginate(6);
        return view('livewire.admin.category-component',['categories' => $categories])->layout('layouts.base');
    }
}
