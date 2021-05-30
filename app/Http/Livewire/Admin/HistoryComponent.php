<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use App\Models\Reciept;
use Livewire\Component;
use App\Models\Debt;
use Livewire\WithPagination;

class HistoryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $payments = Payment::paginate(15);
        $reciepts = Reciept::paginate(15);
        return view('livewire.admin.history-component',[
            'payments' => $payments,
            'reciepts' => $reciepts
        ])->layout('layouts.base');
    }
}
