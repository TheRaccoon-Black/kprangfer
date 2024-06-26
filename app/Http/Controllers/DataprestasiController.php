<?php

namespace App\Http\Controllers;

use App\Models\Dataevent;
use App\Models\Dataprestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataprestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::user()->role == 'Administrator') {
            $dtevent = Dataevent::All();
            return view('Data Prestasi.Data_Prestasi', compact('dtevent'));
        // } else {
        //     $dtevent = Dataevent::where('user_id', auth()->user()->id)->get();
        //     // dd($dtevent);
        //     return view('Data Prestasi.Data_Prestasi', compact('dtevent'));
        // }
        // dd($dtevent);
    }
    public function print($id){
        $event = Dataevent::find($id);
        return view('Data Event.print', compact('event'));
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
    public function store(Request $request)
    {
        //
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
