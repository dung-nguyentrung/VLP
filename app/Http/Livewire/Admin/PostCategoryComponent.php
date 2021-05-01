<?php

namespace App\Http\Livewire\Admin;

use App\Models\PostCategory;
use Livewire\Component;
use Livewire\WithPagination;

class PostCategoryComponent extends Component
{
    use WithPagination;

    public function deletePostCategory($id){
        $category = PostCategory::find($id);
        $category->delete();
        session()->flash('message','Xóa danh mục thành công !');
    }

    public function render()
    {
        $postcategories = PostCategory::paginate(6);
        return view('livewire.admin.post-category-component',[
            'postcategories' => $postcategories
        ])->layout('layouts.base');
    }
}
