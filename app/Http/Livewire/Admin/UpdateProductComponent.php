<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class UpdateProductComponent extends Component
{
    use WithFileUploads;
    public $product_slug;
    public $product_id;
    public $name;
    public $slug;
    public $short_description;
    public $price;
    public $quantity;
    public $SKU;
    public $image;
    public $stock_status;
    public $category_id;
    public $new_image;

    public function mount($product_slug){
        $this->slug = $product_slug;
        $product = Product::where('slug',$this->slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->price = $product->price;
        $this->quantity = $product->quantity;
        $this->SKU = $product->SKU;
        $this->image = $product->image;
        $this->stock_status = $product->stock_status;
        $this->category_id = $product->category_id;
    }

    public function updateProduct(){

    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.update-product-component',[
            'categories' => $categories,
        ])->layout('layouts.base');
    }
}
