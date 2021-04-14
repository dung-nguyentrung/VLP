<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use App\Exports\CatergoryExport;
use Maatwebsite\Excel\Facades\Excel;

class CategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Xóa danh mục sản phẩm thành công !');
    }

    public function exportCategory(){
        return Excel::download(new CatergoryExport, 'categories.xlsx');
    }

    public function render()
    {
        $categories = Category::paginate(6);
        return view('livewire.admin.category-component',['categories' => $categories])->layout('layouts.base');
    }
}
