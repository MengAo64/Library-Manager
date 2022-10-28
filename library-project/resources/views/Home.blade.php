@extends('layout/main')
@section('title')
Library | Home
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("home.css") }}">
@endsection
@section('bootsrap')
<link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css") }}">
@endsection

@section('content')

    <div class="kotak">
    <div class="judul"><b>........</b></div> 
        
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