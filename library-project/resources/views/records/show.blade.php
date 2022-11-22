@extends('layout.main')
@section('title')
Library | Show Member
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("css/showmember.css") }}">
@endsection
@section('content')
    

<div class="kotak">
<div class="add">
            <h1 class="title2">Record information</h1>
            </div>
            <br> <br>

    
    <div class="icon" style="display: inline-block;"><img src="{{asset("img/history.png")}}" alt="gambar buku"  style="margin:1px -100px 0 270px; height:150px; "> </div>
            <div class="kotak-input-record">
                <div class="nama-add"><span class="input-group-text nama-inp">Borrower = {{ $record -> member -> name}}</span>
                </div>
                <br>

                <div class="date-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Book = {{ $record -> book -> title}}</span>
                </div>     <br>

                <div class="nama-add"><span class="input-group-text nama-inp">Date = {{ $record -> date_record}}</span>
                </div><br>

                <div class="nama-add"><span class="input-group-text nama-inp">Status = {{ $record -> status}}</span>
                </div>
                
            </div>
              
               <div class="button3">
                <form action="/record/{{$record->id}}" method="POST">
                        @csrf
                        @method('delete')
                   <a class="btn-edit"  href="/record/edit/{{$record->id}}"> Edit </a>
                    <button class="btn-delete" type="submit"> Delete </button>
                </form>
            
            
       
                
            </div>  
    </div>
    @endsection