<?php

namespace App\Http\Livewire\Admin;

use App\Models\Recruitment;
use Livewire\Component;
use Livewire\WithPagination;

class ApplyComponent extends Component
{
    public function viewAllApply(){
        $recruitments = Recruitment::where('notify',1)->get();
        foreach ($recruitments as $apply){
            $apply->notify = '0';
            $apply->save();
        }
    }
    use WithPagination;
    public function render()
    {
        $this->viewAllApply();
        $recruitments = Recruitment::paginate(6);
        return view('livewire.admin.apply-component',['recruitments'=>$recruitments])->layout('layouts.base');
    }
}
