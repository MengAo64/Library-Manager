@extends('member')

@section('container')

<div class="kotak">
        <div class="judul"><b>Members</b></div> 
        <div class="addbook">
            <a href="addmember">AddMember</a>
        </div>

        
        <table class="table table-bordered table-hover" >  
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
   <tr >
      <th scope="row">{{ $i }}</th>
      <td><a href="/member/{{ $m -> id}}" style="text-decoration:none; color:black;">{{ $m -> name}}</a></td>
      <td>{{ $m -> join_date}}</td>
      <td>
        <a href="/member/{{$m->member}}}}/edit">Edit</a></td>
        <form acton="/member/{{$m->member}}">method="POST">
          @csrf
          @method('delete')
        <input type="submit" value="Delete">
</td>  
    </tr>
    @endforeach
  </tbody>
</table>

</div>


@endsection