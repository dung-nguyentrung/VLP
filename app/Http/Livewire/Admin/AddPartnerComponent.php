<?php

namespace App\Http\Livewire\Admin;

use App\Models\Partner;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPartnerComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;

    public function updated($field){
        $this->validateOnly($field,[
            'name' => 'required',
            'new_image' => 'required|image'
        ],[
            'name.required' => 'Tên không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh'
        ]);
    }

    public function storePartner(){
        $this->validate([
            'name' => 'required',
            'image' => 'required|image'
        ],[
            'name.required' => 'Tên không được trống',
            'image.required' => 'Hình ảnh không được trống',
            'image.image' => 'Nhập đúng định dạng hình ảnh'
        ]);
        $partner = new Partner();
        $partner->name = $this->name;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs("sponsor-2",$imageName);
        $partner->image = $imageName;
        $partner->save();
        session()->flash('message','Thêm mới đối tác công ty thành công !');
    }

    public function render()
    {
        return view('livewire.admin.add-partner-component')->layout('layouts.base');
    }
}
