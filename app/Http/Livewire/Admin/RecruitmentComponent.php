<?php

namespace App\Http\Livewire\Admin;

use App\Models\Career;
use App\Models\Recruitment;
use Livewire\Component;
use Livewire\WithPagination;

class RecruitmentComponent extends Component
{
    public function deleteRecruitment($id){
        $career = Career::find($id);
        $career->delete();
        session()->flash('message','Xoá tin tuyển dụng thành công !');
    }
    use WithPagination;
    public function render()
    {
        $careers = Career::paginate(6);
        return view('livewire.admin.recruitment-component',['careers' => $careers])->layout('layouts.base');
    }
}
