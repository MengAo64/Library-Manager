@extends('layout/main')
@section('title')
Library | Member
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
        <div class="judul"><b>Members</b></div> 
        <div class="add">
            <a href="/member/create">AddMember</a>
        </div>
      </div>

        
        <table class="table table-bordered table-hover" >  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Join Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 0; ?>
  @foreach($member as $m) 
  <?php $i++; ?>
   <tr >
      <th scope="row">{{ $i }}</th>
      <td><a href="/member/show/{{ $m -> id}}" style="text-decoration:none; color:black;">{{ $m -> name}}</a></td>
      <td><a href="/member/show/{{ $m -> id}}" style="text-decoration:none; color:black;">{{ $m -> join_date}}</a></td>
      <td><a href="/member/show/{{ $m -> id}}"  class="btn btn-outline-dark">Detail</a></td>
         

    </tr>
    @endforeach
  </tbody>
</table>

@include('layout.pagination', ['paginator' => $member])

</div>


@endsection