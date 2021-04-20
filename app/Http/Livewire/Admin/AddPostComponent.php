<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddPostComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-post-component')->layout('layouts.base');
    }
}
