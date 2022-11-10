@extends('layout.main')
@section('title')
Library | AddMember
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('record-create.css') }}">
@endsection
@section('content')

<form method="POST" action="{{url('record')}}">
        @csrf
        <div class="kotak">
            <div class="add">
            <h1>Add Records</h1>

            <div class="input">

            <div class="record-add"><span class="input-group-text nama-inp">Borrower =</span>
                <input class="inputborrower" name="name" type="text" aria-label="First name" class="form-control" placeholder="input Borrower" value="{{old ('name')}}">
                </div>
                    @error('name')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                
                    <div class="book-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Book =</span>
                <input class="input-book" name="join_date" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Title" value="{{old ('join_date')}}" >
                </div>
                    @error('join_date')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror


                    <div class="record-date">
                <span class="input-group-text" id="inputGroup-sizing-lg">Date =</span>
                <input class="date" name="join_date" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date" value="{{old ('join_date')}}" >
                </div>
                    @error('join_date')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror


                    <div class="judultitle">Status</div>
                    
                <input class="input2" type="radio"  name="status" value="Dipinjam"  >Dipinjam</div>
                <input class="input2" type="radio"  name="status" value="Tidak Dipinjam" {{"checked"}} >Tidak Dipinjam</div>
        </div>











@endsection