<?php

namespace App\Http\Livewire\Admin;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithPagination;

class PartnerComponent extends Component
{
    public function deletePartner($id){
        $partner = Partner::find($id);
        $partner->delete();
        session()->flash('message','Xóa đối tác thành công !');
    }

    use WithPagination;
    public function render()
    {
        $partners = Partner::paginate(6);
        return view('livewire.admin.partner-component',['partners' => $partners])->layout('layouts.base');
    }
}
