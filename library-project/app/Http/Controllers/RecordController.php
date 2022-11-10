<?php

namespace App\Http\Controllers;

use App\Models\record;
use App\Models\member;
use App\Models\book;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        return view ( 'records.indexrecord',[
            'record' => Record::with(['book','member'])->get()
        ]
        
    );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Record ;
        return view('records.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "name" => "required",
        //     "join_date" => "required"
            
        // ]);
        
            
        $model = new Record;
        $model-> member -> name = $request->name;
        $model-> book -> title = $request->title;
        $model-> record_date = $request->record_date;
        $model-> status = $request->status;
        $model->save();


        return redirect('Record')->with('success', 'Record Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(record $record)
    {
        //
    }
}
