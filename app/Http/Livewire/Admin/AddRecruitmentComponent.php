<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Career;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddRecruitmentComponent extends Component
{
    public $position;
    public $quantity;
    public $content;
    public $required;
    public $expiry_date;
    public $user_id;

    public function mount(){
        $this->user_id = Auth::user()->id;
    }

    public function storeRecruitment(){
        $recruitment = new Career();
        $recruitment->position = $this->position;
        $recruitment->quantity = $this->quantity;
        $recruitment->content = $this->content;
        $recruitment->required = $this->required;
        $recruitment->expiry_date = $this->expiry_date;
        $recruitment->user_id = $this->user_id;
        $recruitment->save();
        session()->flash('message','Thêm tin tuyển dụng thành công !');
    }

    public function render()
    {
        return view('livewire.admin.add-recruitment-component')->layout('layouts.base');
    }
}
