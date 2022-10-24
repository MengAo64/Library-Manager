@extends('Books')

@section('container')



<div class="kotak">
        <div class="judul"><b>Books</b></div> 
        <div class="addbook">
            <a href="/addbook">AddBook</a>
        </div>
        <div class="isi">
        @foreach ($buku as $b)
        <a href=""  style="text-decoration: none; color:black;">
            <div class="card1">
                <img src="img/placeholder.jpg" alt=""  style="width: 130px; margin: 10px 0 0 2em;">
                <div class="deskripsi" style="margin: 10px 0 0 1em;">
                    <h4 class="title">{{ $b -> title }}</h4>
                    <p class="author">{{ $b -> author }}</p>
                    <p class="author">{{ $b -> publisher }}</p>
                    <p class="author">{{ $b -> publication_date }}</p>
                    <p class="author">{{ $b -> status }}</p>
                </div>
            </div>
        </a>
            @endforeach
        </div>
     
</div>



@endsection

