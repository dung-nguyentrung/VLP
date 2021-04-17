<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCategory extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $categories = Category::all();
        $products = Product::where('category_id',$category->id)->get();
        $populars = Product::inRandomOrder()->limit(3)->get();
        return view('livewire.product-category',[
            'category' => $category,
            'categories' => $categories,
            'products' => $products,
            'populars' => $populars
        ]);
    }
}
