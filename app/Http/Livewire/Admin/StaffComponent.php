<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class StaffComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $staffs = User::whereNotIn('utype',['USR','ADM'])->paginate(15);
        return view('livewire.admin.staff-component',['staffs' => $staffs])->layout('layouts.base');
    }
}
