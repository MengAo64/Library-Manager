@extends('layout.main')
@section('title')
Library | AddMember
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('record-create.css') }}">
@endsection
@section('content')

<form method="POST" action="{{url('member')}}">
        @csrf
    <div class="kotak">
            <div class="add">
            <h1>Add Records</h1>
            </div>

        <div class="input">

            <div class="record-borrower"><span class="input-group-text nama-inp">Borrower =</span>
                <!-- <input class="inputborrower" name="name" type="text" aria-label="First name" class="form-control" placeholder="input Borrower" value="{{old ('name')}}"> -->
                <select class="input-borrower" name="member_id" id="">
                    @foreach($members as $member)
                        <option value="{{$member->id}}">{{$member->name}}</option>
                    @endforeach
                </select>  
            </div>           

            <div class="book-add">
                <span class="record-book" id="inputGroup-sizing-lg">Book =</span>
                <select class="input-book" name="book_id" id="">
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


                    <div class="status1">
                    <div class="status">            
                <div class="judultitle">Status</div>
                <div class="stat">
               <div class="input1"><input type="radio"  name="status" value="Dipinjam" >Dipinjam </div> 
               <div class="input2"><input type="radio"  name="status" value="Tidak Dipinjam" {{"checked"}} >Tidak Dipinjam</div> 
            </div>   
        </div>
    </div>
                
                <button class="btn-submit" type="submit"> Add</button>
        
        </div>      
    </div>            
       

@endsection