<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddGalleryComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $image;

    public function updated($field){
        $this->validateOnly($field,[
            'title' => 'required',
            'image' => 'required|image'
        ],[
            'title.required' => 'Tiêu đề hình ảnh không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh'
        ]);
    }

    public function storeGallery(){
        $this->validate([
            'title' => 'required',
            'image' => 'required|image'
        ],[
            'title.required' => 'Tiêu đề hình ảnh không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh'
        ]);
        $gallery = new Gallery();
        $gallery->title = $this->title;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('galleries',$imageName);
        $gallery->image = $imageName;
        $gallery->save();
        session()->flash('message','Thêm hình ảnh thành công !');
    }
    public function render()
    {
        return view('livewire.admin.add-gallery-component')->layout('layouts.base');
    }
}
