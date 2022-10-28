@extends('layout.main')
@section('title')
Library | ShowMember
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("showmember.css") }}">
@endsection
@section('content')
    

<div class="kotak">
<div class="add">
            <h1 class="title2">Member information</h1>
            </div>
            <br> <br>

            <div class="kotak-input">


                <div class="nama-add"><span class="input-group-text nama-inp">Name = {{$member-> name}}</span>
                </div>
                <br><br>

                <div class="date-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Join Date = {{$member-> join_date}}</span>
                </div>      
               <div class="button3">
                <button class="btn-delete" type="submit"> Delete </button>
                <button class="btn-edit" type="submit"> Edit </button>
            </div>
                
            </div>  
    </div>
    @endsection