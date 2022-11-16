@extends('layout/main')
@section('title')
Library | Reecord
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("addMember.css") }}">
@endsection
@section('content')


<form method="POST" action="/record/{{$record->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf    
            <div class="kotak">
                <div class="add">
                <h1>Edit Record</h1>
                </div>  <br> <br>
                 <div class="kotak-input">
                    <div class="nama-add"><span class="input-group-text nama-inp">Borower =</span>
                     <select class="input-book" name="member_id" id="">
                       @foreach($members as $m)
                        <option value="{{$m->id}}" {{ $m->id == $record->member_id ? "selected" : "" }}>{{ $m->name }}</option>
                      @endforeach
                      </select>
                    <br><br>

                    <div class="book-add">
                      <span class="record-book" id="inputGroup-sizing-lg">Book =</span>
                      <select class="input-book" name="book_id" id="">
                          @foreach($books as $book)
                              <option value="{{$book->id}}" {{ $book->id == $record->book_id ? "selected" : "" }}>{{$book->title}}</option>
                          @endforeach
                      </select>
                      </div>
    
                    <div class="date-add">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Date =</span>
                    <input value="{{$record -> date_record}}" class="inputdate" name="date_record"type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date">
                    @error('date_record')
                         <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                    </div>

                    <div class="a"><div class="a">Status</div>
                    <input class="a" type="radio"  name="status" value="Dipinjam" <?php if($record['status']=='Dipinjam') echo 'checked'?>>Dipinjam</div>
                    <input class="a" type="radio"  name="status" value="Tidak Dipinjam" <?php if($record['status']=='Tidak Dipinjam') echo 'checked'?>>Tidak Dipinjam</div>
                </div>    
            <br><br>
            <button class="btn-submit" type="submit"> Update </button>
            
            </div>
</form>


@endsection