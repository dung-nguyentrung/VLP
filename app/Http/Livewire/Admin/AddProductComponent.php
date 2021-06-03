<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $price;
    public $quantity;
    public $SKU;
    public $image;
    public $stock_status;
    public $category_id;

    public function updated($field){
        $this->validateOnly($field,[
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'SKU' => 'required',
            'image' => 'required|image',
        ],[
            'name.required' => 'Tên sản phẩm không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'short_description.required' => 'Mô tả không được trống',
            'SKU.required' => 'SKU không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh',
        ]);
    }

    public function mount(){
        $this->category_id = Category::first()->id;
        $this->stock_status = "Còn hàng";
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function storeProduct(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'SKU' => 'required',
            'image' => 'required|image',
        ],[
            'name.required' => 'Tên sản phẩm không được trống',
            'slug.required' => 'Đường dẫn không được trống',
            'short_description.required' => 'Mô tả không được trống',
            'SKU.required' => 'SKU không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh',
        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->price = $this->price;
        $product->quantity = $this->quantity;
        $product->SKU = $this->SKU;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('shop',$imageName);
        $product->image = $imageName;
        $product->stock_status = $this->stock_status;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Thêm sản phẩm thành công !');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.add-product-component',[
            'categories' => $categories,
        ])->layout('layouts.base');
    }
}
