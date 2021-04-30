<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class AdminGalleryComponent extends Component
{
    use WithPagination;

    public function deleteGallery($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        session()->flash('message','Xóa hình ảnh thành công !');
    }

    public function render()
    {
        $galleries = Gallery::paginate(8);
        return view('livewire.admin.admin-gallery-component',[
            'galleries' => $galleries,
        ])->layout('layouts.base');
    }
}
