@extends('layout/main')
@section('title')
Library | ShowBook
@endsection
@section('css')
      <link rel="stylesheet" href="{{ asset("css/books.css") }}">
@endsection
@section('content')
    

    <div class="kotak2">
        <div class="kiri"><img src="{{ $buku->cover_image ? '/coverimg/' . $buku->cover_image :  asset("img/placeholder.jpg") }}" alt=""></div>
        <div class="kanan">
            <h2 class="p">{{ $buku->title }} </h2>
            <h4  class="p">{{ $buku->author }}</h4>
            <h4  class="p">{{$buku ->publisher}}</h4>

            <h4 class="terbit">Terbit : {{$buku ->publication_date}}</h4>

            <h4  class="status">Status : {{$buku ->status}}</h4>
            <br><br><br>

           
        </div>
        <div class="button2">
            {{-- buat edit/Update book --}}
            <a class="edit " href="/book/edit/{{$buku->id}}">Update</a>

            {{-- buat delete book --}}
            <form action="/book/{{$buku->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="hidden" name="_method"  value="DELETE">
                <button class="delete"  type="submit" >Delete</button>
                @error('')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                {{-- <a class="delete" href="">Delete</a> --}}
            </form>

        
        </div>
    </div>
    @endsection