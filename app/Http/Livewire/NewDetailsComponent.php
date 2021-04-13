<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewDetailsComponent extends Component
{
    public $new_slug;

    public function mount($new_slug){
        $this->new_slug = $new_slug;
    }

    public function render()
    {
        $new = News::where('slug',$this->new_slug)->first();
        return view('livewire.new-details-component',['new' => $new]);
    }
}
