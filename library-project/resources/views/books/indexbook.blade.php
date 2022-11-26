@extends('/layout/main')
@section('title')
Library | Books
@endsection
@section('bootsrap')
<link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css") }}">
@endsection
@section('css')
      <link rel="stylesheet" href="{{ asset("css/books.css") }}">
@endsection

@section('content')
<div class="kotak">
    <div class="header">
        <div class="judul"><b>Books</b></div> 
        <div class="addbook">
            <a href="/book/create">AddBook</a>
        </div>
    </div>
        <div class="isi">
        @foreach ($buku as $b)
        <a href="book/show/{{ $b->id }}"  style="text-decoration: none; color:black;">
            <div class="card1">
                <img src="{{ $b->cover_image ? 'coverimg/' . $b->cover_image :  asset("img/placeholder.jpg") }}" alt=""  style="width: 130px; max-height:130px; margin: 10px 0 0 2em;">
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
        @include('layout.pagination', ['paginator' => $buku])
</div>


@endsection

