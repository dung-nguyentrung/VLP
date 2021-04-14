<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }

    use WithPagination;
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $relateds = Product::where('category_id',$product->category_id)->limit(4)->get();
        $comments = Comment::where('product_id',$product->id)->get();
        return view('livewire.details-component',['product' => $product,'relateds' => $relateds,'comments' => $comments]);
    }
}
