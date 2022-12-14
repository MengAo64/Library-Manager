@extends('layout/main')
@section('title')
Library | Record
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("css/member.css") }}">
@endsection
@section('bootsrap')
<link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css") }}">
@endsection
@section('content')
<div class="kotak">
  <div class="header">
        <div class="judul"><b>Records</b></div>
        <div class="add">
          <a href="/record/create">Add Record</a>
      </div>
    </div>

        <table class="table table-bordered table-hover" >  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Borrower</th>
      <th scope="col">Book</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $i = 0; ?>
    @foreach($record as $r) 
    <?php $i++; ?>
     <tr >
        <th scope="row">{{ $i }}</th> 
        <td><a href="/record/show/{{ $r -> id}}" style="text-decoration:none; color:black;" >{{$r -> member -> name}}</a></td>
        <td><a href="/record/show/{{ $r -> id}}" style="text-decoration:none; color:black;">{{ $r -> book -> title}}</a></td>   
        <td><a href="/record/show/{{ $r -> id}}" style="text-decoration:none; color:black;">{{ $r -> date_record}}</a></td>   
        <td><a href="/record/show/{{ $r -> id}}" style="text-decoration:none; color:black;">{{ $r ->  status}}</a></td>   
        <td><a href="/record/show/{{ $r -> id}}" class="btn btn-outline-dark" >Detail</a></td>   
      </tr>
      @endforeach
    </tbody>
  </table>
  
@include('layout.pagination', ['paginator' => $record])
</div>
@endsection