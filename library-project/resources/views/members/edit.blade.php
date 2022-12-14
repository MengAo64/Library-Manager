@extends('layout.main')
@section('title')
Library | Edit Member
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("css/addMember.css") }}">
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

            <div class="edit">
            <div class="kotak-input-1">
                <div class="nama-add"><span class="input-group-text nama-inp" style="margin-left: 45px">Name  </span>
                <input value="{{$member->name}}" class="input-nama" name="name" type="text" aria-label="First name" class="form-control" placeholder="   Name">
                @error('name')
                  <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>

                <div class="nama-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Join Date  </span>
                <input value="{{$member->join_date}}" class="input-nama" name="join_date"type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date">
                @error('join_date')
                     <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>

            </div>    
        </div>
        <button class="btn-submit" type="submit"> Update </button>
        
        </div>
        </form>
        @endsection
        