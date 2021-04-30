<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    public $keyword;

    public function mount(){
        $this->fill(request()->only('keyword'));
    }

    use WithPagination;
    public function render()
    {
        $products = Product::where('name','like','%'.$this->keyword .'%')->paginate(9);
        $categories = Category::all();
        $populars = Product::inRandomOrder()->limit(3)->get();
        return view('livewire.search-component',[
            'products' => $products,
            'categories' => $categories,
            'populars' => $populars
        ]);
    }
}
