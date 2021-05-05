<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class SliderComponent extends Component
{
    public function deleteSlider($id){
        $slider = Slider::find($id);
        $slider->delete();
        session()->flash('message','Xóa slider thành công !');
    }

    use WithPagination;
    public function render()
    {
        $sliders = Slider::paginate(6);
        return view('livewire.admin.slider-component',['sliders' => $sliders])->layout('layouts.base');
    }
}
