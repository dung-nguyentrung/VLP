<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Debt;
use App\Models\Setting;

class DebtComponent extends Component
{
    public $debt_id;
    public $total;
    public $addPaid;
    public $paid;
    public $owe;

    public function mount($debt_id){
        $this->debt_id = $debt_id;
        $debt = Debt::where('id',$this->debt_id)->first();
        $this->total = $debt->total;
        $this->paid = $debt->paid;
        $this->owe = $debt->owe;
    }

    public function update($field){
        $this->validateOnly($field,[
            'addPaid' => 'required|integer'
        ]);
    }

    public function adjustDebt(){
        $this->validate([
            'addPaid' => 'required|integer'
        ]);
        $debt = Debt::find($this->debt_id);
        $debt->paid = $this->paid + $this->addPaid;
        if($this->owe >= $this->paid){
            $debt->owe = $this->owe - $this->addPaid;
        }else{
            $debt->owe = 0;
        }
        $debt->save();
        session()->flash('message','Điều chỉnh công nợ thành công');
    }

    use WithPagination;
    public function render()
    {
        $debt = Debt::where('id',$this->debt_id)->first();
        $site = Setting::first();
        return view('livewire.admin.debt-component',['debt' => $debt,'site' => $site])->layout('layouts.base');
    }
}
