<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(9);
        $categories = Category::all();
        $populars = Product::inRandomOrder()->limit(3)->get();
        return view('livewire.shop-component',[
            'products' => $products,
            'categories' => $categories,
            'populars' => $populars
        ]);
    }
}
