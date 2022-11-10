@extends('layout.main')
@section('title')
Library | AddMember
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('record-create.css') }}">
<link rel="stylesheet" href="style.css">
@endsection
@section('content')

<form method="POST" action="{{url('member')}}">
        @csrf
        <div class="kotak">
            <div class="add">
            <h1>Add Records</h1>

            <div class="input">

            <div class="record-borrower"><span class="input-group-text nama-inp">Borrower =</span>
                <select class="input-borrower" name="borrower" id="">
                    @foreach($members as $member)
                        <option value="{{$member->id}}">{{$member->name}}</option>
                    @endforeach
                </select>  
            </div>           

            <div class="book-add">
                <span class="record-book" id="inputGroup-sizing-lg">Book =</span>
                <select class="input-book" name="borrower" id="">
                    @foreach($books as $book)
                        <option value="{{$book->id}}">{{$book->title}}</option>
                    @endforeach
                </select>
            </div>
                    


            <div class="date-record">
                <span class="record-date" id="inputGroup-sizing-lg">Date =</span>
                <input class="input-date" name="join_date" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date" value="{{old ('join_date')}}" >
            </div>
                    @error('join_date')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror


                    <div class="judultitle"><h2>Status</h2></div>
            <div class="stat">
                <input class="input1" type="radio"  name="status" value="Dipinjam"  >Dipinjam</div>
                <input class="input0" type="radio"  name="status" value="Tidak Dipinjam" {{"checked"}} >Tidak Dipinjam
        </div>











@endsection