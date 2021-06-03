<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddSliderComponent extends Component
{
    public $title;
    public $image;
    public $description;

    public function updated($field){
        $this->validateOnly($field,[
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'required'
        ],[
            'title.required' => 'Tiêu đề không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng của hình ảnh',
            'description.required' => 'Mô tả không được trống'
        ]);
    }

    use WithFileUploads;
    public function storeSlider(){
        $this->validate([
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'required'
        ],[
            'title.required' => 'Tiêu đề không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng của hình ảnh',
            'description.required' => 'Mô tả không được trống'
        ]);
        $slider = new Slider();
        $slider->title = $this->title;
        $slider->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('sliders',$imageName);
        $slider->image = $imageName;
        $slider->save();
        session()->flash('message','Thêm slider thành công !');
    }

    public function render()
    {
        return view('livewire.admin.add-slider-component')->layout('layouts.base');
    }
}
