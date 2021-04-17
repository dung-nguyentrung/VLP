<?php

namespace App\Http\Livewire\Admin;

use App\Models\Career;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EditRecruitmentComponent extends Component
{
    public $recruitment_id;
    public $position;
    public $quantity;
    public $content;
    public $required;
    public $expiry_date;
    public $user_id;

    public function mount($recruitment_id){
        $this->recruitment_id = $recruitment_id;
        $recruitment = Career::find($this->recruitment_id);
        $this->position = $recruitment->position;
        $this->quantity = $recruitment->quantity;
        $this->content = $recruitment->content;
        $this->required = $recruitment->required;
        $this->expiry_date = $recruitment->expiry_date;
        $this->user_id = Auth::user()->id;
    }

    public function updateRecruitment(){
        $recruitment = Career::find($this->recruitment_id);
        $recruitment->position = $this->position;
        $recruitment->quantity = $this->quantity;
        $recruitment->content = $this->content;
        $recruitment->required = $this->required;
        $recruitment->expiry_date = $this->expiry_date;
        $recruitment->user_id = $this->user_id;
        $recruitment->save();
        session()->flash('message','Cập nhật tin tuyển dụng thành công !');
    }

    public function render()
    {
        return view('livewire.admin.edit-recruitment-component')->layout('layouts.base');
    }
}
