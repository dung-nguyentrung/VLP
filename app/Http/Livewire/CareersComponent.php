<?php

namespace App\Http\Livewire;

use App\Models\Career;
use Livewire\Component;
use Livewire\WithPagination;

class CareersComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $careers = Career::paginate(6);
        return view('livewire.careers-component',['careers' => $careers]);
    }
}
