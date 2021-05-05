<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Throwable;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use WithPagination;
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique',
            'phone' => 'required|integer',
            'address' => 'required',
            'position' => 'required',
        ]);
        try {
            Recruitment::create([
                'name' => $req->name,
                'email' => $req->email,
                'phone' => $req->phone,
                'address' => $req->address,
                'position' => $req->position,
                'message' => $req->message
                ]);
            $req->session()->flash('message','Chúng tôi sẽ liên lạc với bạn sớm nhất có thể !');
            return redirect()->route('careers');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
