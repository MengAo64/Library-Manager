@extends('Books')

@section('container')



<div class="kotak">
        <div class="judul"><b>Books</b></div> <div class="addbook">
            <a href="#">AddBook</a>
        </div>
        <div class="isi">
        @foreach ($buku as $b)
            <div class="card1">
                <img src="img/b.ind.jpg" alt=""  style="width: 130px; margin: 10px 0 0 2em;">
                <div class="deskripsi" style="margin: 10px 0 0 1em;">
                    <h4 class="title">{{ $b -> name }}</h4>
                    <p class="author">{{ $b -> author }}</p>
                    <p class="author">{{ $b -> publication_date }}</p>
                    <!-- <p class="author">{{ $b -> author }}</p>
                    <p class="author">{{ $b -> author }}</p> -->
                    <br>
                    <a href="#" class="button">Update book</a>
                </div>
            </div>
            @endforeach

        </div>
     
</div>



@endsection

