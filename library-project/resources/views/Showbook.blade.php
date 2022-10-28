<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("books.css") }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Book</title>
</head>
<body>
    @yield('navbar')
    <div class="kotak2">
        <div class="kiri"><img src="/coverimg/{{ $buku->cover_image}}" alt=""></div>
        <div class="kanan">
            <h2 class="p">{{ $buku->title }} </h2>
            <h4  class="p">{{ $buku->author }}</h4>
            <h4  class="p">{{$buku ->publisher}}</h4>
            <h4  class="p">{{$buku ->status}}</h4>
            <br><br>
            <h4 style="font-size: 22px">{{$buku ->publication_date}}</h4>
            <br><br><br>

            <a href="" class="borrow">Borrow</a>
        </div>
        <div class="button2">

            {{-- buat delete --}}
            {{-- <form action="{{url ($book->id) }}" method="POST"> --}}
                <a class="delete" href="">Delete</a>
            {{-- </form> --}}
            <a class="edit" href="">Edit</a>
        </div>
    </div>
</body>
</html>