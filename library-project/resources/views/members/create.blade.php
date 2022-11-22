@extends('layout.main')
@section('title')
Library | AddMember
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("addMember.css") }}">
@endsection
@section('content')
    

    <form method="POST" action="{{url('member')}}">
        @csrf
        <div class="kotak">
            <div class="add">
            <h1>Add Member</h1>
            </div>
            <br> <br>

            <div class="kotak-input">


                <div class="nama-add"><span class="input-group-text nama-inp">Name =</span>
                <input class="inputnama" name="name" type="text" aria-label="First name" class="form-control" placeholder="Name" value="{{old ('name')}}">
                </div>
                    @error('name')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                <br><br>

                {{-- <div class="date-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Join Date =</span>
                <input class="inputdate" name="join_date" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date" value="{{old ('join_date')}}" >
                </div>
                    @error('join_date')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror --}}

            </div>    
        <br><br>
        <button class="btn-submit" type="submit"> Add </button>
        
        </div>
        </form>
        @endsection
        