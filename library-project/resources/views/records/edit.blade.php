@extends('layout/main')
@section('title')
Library | Reecord
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/recordEdit.css') }}">
@endsection
@section('content')
<form method="POST" action="/record/{{$record->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf    
          
            <div class="kotak">
                <div class="add">
                <h1>Edit Record</h1>
                </div>  
                <div class="container">
                 <div class="input">
                    <div class="record-borrower"><label class="input-group-text nama-inp">Borower</label>
                     <select class="input-borrower" name="member_id" id="">
                       @foreach($members as $m)
                        <option value="{{$m->id}}" {{ $m->id == $record->member_id ? "selected" : "" }}>{{ $m->name }}</option>
                      @endforeach
                      </select>
                   

                    <div class="book-add">
                      <label class="record-book" id="inputGroup-sizing-lg">Book</label>
                      <select class="input-book" name="book_id" id="">
                          @foreach($books as $book)
                              <option value="{{$book->id}}" {{ $book->id == $record->book_id ? "selected" : "" }}>{{$book->title}}</option>
                          @endforeach
                      </select>
                      </div>
    
                      <div class="date-record">
                      <label class="record-date" id="inputGroup-sizing-lg">Date</label>
                      <input class="input-date" name="date_record" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date" value="{{ $record -> date_record}}" >
                      </div>
                    @error('date_record')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror

          

                    
                    <div class="statusEdit">
                    <div class="judultitle1"> <label> Status</label></div>
                    <div class="status-edit">
                    <div class="edit1"><input type="radio"  name="status" value="Dipinjam" <?php if($record['status']=='Dipinjam') echo 'checked'?>>Dipinjam</div>
                    <div class="edit2"><input type="radio"  name="status" value="Tidak Dipinjam" <?php if($record['status']=='Tidak Dipinjam') echo 'checked'?>>Tidak Dipinjam</div>
                    </div>
                </div> 
          </div>
        </div>
      </div>     
      <button class="btn-submit" type="submit"> Update </button>        
</form>


@endsection