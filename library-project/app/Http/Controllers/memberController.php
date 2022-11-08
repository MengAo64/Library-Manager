<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $member = [
            'member' => Member::all()
        ];
        return view('members.indexmember', $member);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new member() ;
        return view('members.create', compact(
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
        $request->validate([
            "name" => "required",
            "join_date" => "required"
            
        ]);
        

        $model = new Member;
        $model->name = $request->name;
        $model->join_date = $request->join_date;
        $model->save();

        return redirect('member')->with('success', 'Member Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($mb)
    {
        $member = member::findOrFail($mb);
        return view("members.show" , ["member" => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = member::find($id);
        return view('members.edit',compact(['member']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            "name" => "required",
            "join_date" => "required"
            
        ]);

        $member = member::find($id);
        $member->update();
        $member ->name = $request-> name;
        $member ->join_date = $request-> join_date;

        $member->save();

        return redirect('member')->with('success', 'Member Berhasil di Update');;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = member::find($id);
        $model->delete();
        return redirect('member')->with('success', 'Member Berhasil di Hapus');;
    }
}
