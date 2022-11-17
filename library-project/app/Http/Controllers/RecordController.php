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
        // $record = record::latest()->paginate(5);

        return view ( 'records.indexrecord',[
            // 'record' => Record::latest()->paginate(5)
            'record' => Record::with(['book','member'])->get(),
          
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
        $members = member::latest()->get();
        $books = book::latest()->get();
        return view('records.create', [
            "members" => $members,
            "books" => $books
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "date_record" => "required",
            "status" => "required"
        ]);
        
        $model = new Record;
        book::find($request->book_id)->update(["status" => $request->status]);
        $model->member_id = $request->member_id;
        $model->book_id = $request->book_id;
        $model-> date_record = $request->date_record;
        $model-> status = $request->status;
        $model->save();
            

        return redirect('record')->with('success', 'Record Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function show( $rc)
    {
        // dd($rc->all());
        $record = Record::findOrFail($rc);
        return view("records.show" , [
            "record" => $record ,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = record::find($id);
        $members = member::latest()->get();
        $books = book::latest()->get();
        return view('records.edit',compact(['record' , "members" , "books"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
           "member_id" => "required",
           "book_id" => "required",
           "date_record" => "required",
            "status" => "required"
        ]);

        if($request->status == "Tidak Dipinjam"){
            book::find($request->book_id)->update(["status" => $request->status]);
        }
        
        $data = $request->except(["_method" , "_token"]);
        // dd($data);
        record::find($id)->update($data);

        return redirect('record')->with('success', 'Record Berhasil di Update');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = record::find($id);
        $model->delete();
        return redirect('record')->with('success', 'record Berhasil di Hapus');;
    }
}
