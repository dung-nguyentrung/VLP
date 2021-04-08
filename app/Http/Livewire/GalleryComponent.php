<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $galleries = Gallery::paginate(9);
        return view('livewire.gallery-component',['galleries' => $galleries]);
    }
}
