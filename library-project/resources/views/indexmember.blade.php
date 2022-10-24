@extends('member')

@section('container')

<div class="kotak">
        <div class="judul"><b>Members</b></div> 
        <div class="addbook">
            <a href="/addmember">AddMember</a>
        </div>

        <table class="table table-striped">
           
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Join Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 0; ?>
  @foreach($member as $m) 
  <?php $i++; ?>
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $m -> name}}</td>
      <td>{{ $m -> join_date}}</td>    
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection