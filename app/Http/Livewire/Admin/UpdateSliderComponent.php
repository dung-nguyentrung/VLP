<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateSliderComponent extends Component
{
    public $slider_id;
    public $title;
    public $description;
    public $image;
    public $new_image;

    public function updated($field){
        $this->validateOnly($field,[
            'title' => 'required',
            'new_image' => 'image',
            'description' => 'required'
        ],[
            'title.required' => 'Tiêu đề không được trống',
            'new_image.image' => 'Nhập đúng định dạng của hình ảnh',
            'description.required' => 'Mô tả không được trống'
        ]);
    }

    public function mount($slider_id){
        $this->slider_id = $slider_id;
        $slider = Slider::where('id',$this->slider_id)->first();
        $this->title = $slider->title;
        $this->description = $slider->description;
        $this->image = $slider->image;
    }

    use WithFileUploads;
    public function updateSlider(){
        $this->validate([
            'title' => 'required',
            'new_image' => 'image',
            'description' => 'required'
        ],[
            'title.required' => 'Tiêu đề không được trống',
            'new_image.image' => 'Nhập đúng định dạng của hình ảnh',
            'description.required' => 'Mô tả không được trống'
        ]);
        $slider = Slider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->description = $this->description;
        if ($this->new_image){
            $imageName = Carbon::now()->timestamp. '.' .$this->new_image->extension();
            $this->new_image->storeAs('sliders',$imageName);
            $slider->image = $imageName;
        }
        $slider->save();
        session()->flash('message','Cập nhật slider thành công !');
    }

    public function render()
    {
        return view('livewire.admin.update-slider-component')->layout('layouts.base');
    }
}
