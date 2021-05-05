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

    use WithFileUploads;
    public function storeSlider(){
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
