<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.product-component',['products' => $products])->layout('layouts.base');
    }
}
