<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
//use App\Models\Traits\Search;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;
    public $category = "All";

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Xóa sản phẩm thành công !');
    }

    public function render()
    {
        if ($this->category  == "All"){
            $products = Product::paginate(10);
        }
        else{
            $products = Product::where('category_id',$this->category)->paginate(10);
        }

        $categories = Category::all();
        return view('livewire.admin.product-component',['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
