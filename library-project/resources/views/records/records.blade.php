@extends('layout/main')
@section('title')
Library | Member
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("member.css") }}">
@endsection
@section('bootsrap')
<link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css") }}">
@endsection
@section('content')
<div class="kotak">
        <div class="judul"><b>Records</b></div>
        @foreach ($records as $r)
        <table class="table table-bordered table-hover" >  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Borrow</th>
      <th scope="col">Borrower</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
    @endforeach
@endsection