<?php

namespace App\Http\Livewire;

use Throwable;
use App\Models\Career;
use Livewire\Component;
use App\Models\Recruitment;
use GuzzleHttp\Psr7\Request;
use Livewire\WithPagination;

class CareersComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $position;
    public $message;

    public function storeRecruitment(){
        try {
            Recruitment::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'position' => $this->position,
                'message' => $this->message
                ]);
            session()->flash('message','Successfully');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    use WithPagination;
    public function render()
    {
        $careers = Career::paginate(6);
        return view('livewire.careers-component',['careers' => $careers]);
    }
}
