<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminGalleryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-gallery-component')->layout('layouts.base');
    }
}
