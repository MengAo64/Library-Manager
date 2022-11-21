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
            </div>


            <div class="container">
        <div class="input">
            <div class="borrow">
            <div class="record-borrower">
                <label class="input-group-text nama-inp">Borrower</label>
                <select class="input-borrower" name="member_id" id="">
                    @foreach($members as $member)
                        <option value="{{$member->id}}">{{$member->name}}</option>
                    @endforeach
                </select>  
            </div>        
        </div>   


        <div class="book">
            <div class="book-add">
                <label class="record-book" id="inputGroup-sizing-lg">Book </label>
                <select class="input-book" name="book_id" id="">
                    @foreach($books as $book)
                        <option value="{{$book->id}}">{{$book->title}}</option>
                    @endforeach
                </select>
                </div>
            </div>




            <div class="date">
            <div class="date-record">
                <label class="record-date" id="inputGroup-sizing-lg">Date </label>
                <input class="input-date" name="date_record" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date" value="{{old ('join_date')}}" >
            </div>
                    @error('date_record')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
        </div>




                    <div class="status1">
                    <daiv clss="status">            
                <div class="judultitle"><label> Status</label></div>
                <div class="stat">
               <div class="input1"><input type="radio"  name="status" value="Dipinjam" >Dipinjam </div> 
               <div class="input2"><input type="radio"  name="status" value="Tidak Dipinjam" {{"checked"}} >Tidak Dipinjam</div> 
            </div>   
        </div>
    </div>   
        </div>   
        <button class="btn-submit" type="submit">Add</button>  
    </div>
    </div>            
</form>

@endsection