@extends('showbook')

@section('navbar')
    <nav>
        <a href="#"><img src="img/logo.jpeg" alt="logo" width="240px"></a>
        <ul>
            <li><a href="/home">Dashboard</a></li>
            <li><a href="/book">Manage Books</a></li>
            <li><a href="/member">Manage Members</a></li>
            <li><a href="/record">Records</a></li>
        </ul>
    </nav>
@endsection