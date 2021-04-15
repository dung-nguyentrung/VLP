<?php

namespace App\Http\Livewire\Admin;

use App\Models\Career;
use App\Models\Recruitment;
use Livewire\Component;
use Livewire\WithPagination;

class RecruitmentComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $careers = Career::paginate(6);
        return view('livewire.admin.recruitment-component',['careers' => $careers])->layout('layouts.base');
    }
}
