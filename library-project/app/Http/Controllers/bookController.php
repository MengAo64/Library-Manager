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
    // public function index()
    // {
    //     $datas = book::all();

    //     return view('indexbook', compact(
    //         'datas'
    //     ));


    // }
    public function h()
    {
        $buku = [
            'buku' => Book::all()
        ];
        return view('indexbook', $buku);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Book ;
        return view('createbook', compact(
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

        return redirect('book');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}
