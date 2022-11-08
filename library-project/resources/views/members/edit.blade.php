@extends('layout.main')
@section('title')
Library | Edit Member
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("add.css") }}">
@endsection
@section('content')
    

<form method="POST" action="/member/{{$member->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="kotak">
            <div class="add">
            <h1>Edit Member</h1>
            </div>
            <br> <br>

            <div class="kotak-input">


                <div class="nama-add"><span class="input-group-text nama-inp">Name =</span>
                <input value="{{$member->name}}" class="inputnama" name="name" type="text" aria-label="First name" class="form-control" placeholder="Name">
                @error('name')
                  <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>
                <br><br>

                <div class="date-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Join Date =</span>
                <input value="{{$member->join_date}}" class="inputdate" name="join_date"type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date">
                @error('join_date')
                     <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>

            </div>    
        <br><br>
        <button class="btn-submit" type="submit"> Update </button>
        
        </div>
        </form>
        @endsection
        