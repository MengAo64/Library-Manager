@extends('layout/main')
@section('title')
Library | Dashboard
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("home.css") }}">
@endsection
@section('bootsrap')
<link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css") }}">
@endsection

@section('content')

  
{
<div class="kotak">
  <div class="container my-5">
    @if (Auth::user())
       <h1 style="margin-left: 50px; padding-top:20px;">Selamat Datang, {{Auth::user()->name}}</h1>
    @else
        <h1 style="text-align: center;">Anda Harus Login Terlebih dahulu Untuk mengakses Fitur</h1>
    @endif


  </div>

      
  <div class="tabel">
      <table class="table table-striped">        
<thead>
  <tr>
    <th scope="col">Book Title</th>
    <th scope="col">Author</th>
    <th scope="col">Publisher</th>
  </tr>
</thead>
</table>
<table class="table table-striped">        
<thead>
  <tr>
    <th scope="col">No</th>
    <th scope="col">Name</th>
  </tr>
</thead>
</table>
</div>
  </div>

    
@endsection