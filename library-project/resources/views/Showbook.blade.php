<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("books.css") }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="#"><img src="img/logo.jpeg" alt="logo" width="240px"></a>
        <ul>
            <li><a href="/home">Dashboard</a></li>
            <li><a href="/book">Manage Books</a></li>
            <li><a href="/member">Manage Members</a></li>
            <li><a href="/record">Records</a></li>
        </ul>
    </nav>
    @foreach ($buku as $b)
    <div class="kotak2">
        <div class="kiri"><img src="" alt=""></div>
        <div class="kanan">
            <h2 class="p">{{ $buku->title }} </h2>
            <h4  class="p">{{ $buku->author }}</h4>
            <h4  class="p">{{$buku ->publisher}}</h4>
            <br><br>
            <h4 style="font-size: 22px">Publication date</h4>
            <br><br><br>

            <a href="" class="borrow">Borrow</a>
        </div>
        <div class="button2">

            {{-- buat delete --}}
            {{-- <form action="{{url ($book->id) }}" method="POST"> --}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="delete" type="submit"></button>
                <a class="delete" href="">Delete</a>
            {{-- </form> --}}
            <a class="edit" href="">Edit</a>
        </div>
            @endforeach
    </div>
</body>
</html>