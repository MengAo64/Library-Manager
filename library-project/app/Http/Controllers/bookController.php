<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = [
            'buku' => Book::all()
        ];
        return view('books.indexbook',  $buku);

    }
    // public function h()
    // {
    //     $buku = [
    //         'buku' => Book::all()
    //     ];
    //     return view('indexbook', $buku);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Book ;
        return view('books.create', compact(
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
            "title" => "required",
            "author" => "required",
            "publisher"=> "required",
            "publication_date" => "required",
            "status" => "required"
        ]);

        $model = new Book;
        $model ->title = $request-> title;
        $model ->author = $request-> author;
        $model ->publisher = $request-> publisher;
        $model ->publication_date = $request-> publication_date;
        $model ->status = $request-> status;

        if($request->file("cover_image")){
            $name_file = $request->file("cover_image")->hashName();
            // Storage::put("coverImg/$name_file" , $request->file("cover_image") , "public");
            $request->file("cover_image")->storePubliclyAs("coverImg" , $name_file);
            $model ->cover_image = $name_file;
        }

        $model ->save();

        return redirect('book')->with('success', 'Buku Berhasil di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($bk)
    {
    $book = book::findOrFail($bk);
    return view('books.show',["buku" => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = book::find($id);
        return view('books.edit',compact(['buku']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $buku = book::find($id);
        $buku->update();
        $buku ->title = $request-> title;
        $buku ->author = $request-> author;
        $buku ->publisher = $request-> publisher;
        $buku ->publication_date = $request-> publication_date;
        $buku ->status = $request-> status;

        if($request->file("cover_image")){
            $name_file = $request->file("cover_image")->hashName();
            // Storage::put("coverImg/$name_file" , $request->file("cover_image") , "public");
            $request->file("cover_image")->storePubliclyAs("coverImg" , $name_file);
            $buku ->cover_image = $name_file;
        }

        $buku->save();

        return redirect('book')->with('success', 'Buku Berhasil di Update');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = book::find($id);
        $model->delete();
        return redirect('book')->with('success', 'Buku Berhasil di Hapus');;
    }
}
