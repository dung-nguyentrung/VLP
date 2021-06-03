<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
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
        $this->product_id = $product->id;
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

    public function updated($field){
        $this->validateOnly($field,[
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'SKU' => 'required',
            'new_image' => 'image',
        ],[
            'name.required' => 'Tên sản phẩm không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'short_description.required' => 'Mô tả không được trống',
            'SKU.required' => 'SKU không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh',
        ]);
    }

    public function updateProduct(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'SKU' => 'required',
            'new_image' => 'image',
        ],[
            'name.required' => 'Tên sản phẩm không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'short_description.required' => 'Mô tả không được trống',
            'SKU.required' => 'SKU không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh',
        ]);
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->price = $this->price;
        $product->quantity = $this->quantity;
        $product->SKU = $this->SKU;
        if($this->new_image){
            $imageName = Carbon::now()->timestamp. '.' .$this->new_image->extension();
            $this->new_image->storeAs('shop',$imageName);
            $product->image = $imageName;
        }
        $product->stock_status = $this->stock_status;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Cập nhật sản phẩm thành công !');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.update-product-component',[
            'categories' => $categories,
        ])->layout('layouts.base');
    }
}
