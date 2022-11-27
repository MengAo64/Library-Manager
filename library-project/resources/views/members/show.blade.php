@extends('layout.main')
@section('title')
Library | Show Member
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("css/showMember.css") }}">
@endsection
@section('content')
    

<div class="kotak">
<div class="add">
            <h1 class="title2">Member information</h1>
            </div>
            <br> <br>

    
    <div class="icon" style="display: inline-block;"><i class='bx bx-user' style="margin:1px -140px 0 270px; font-size:110px; " ></i> </div>
            <div class="kotak-input">
                <div class="nama-add"><span class="input-group-text nama-inp">Name = {{$member-> name}}</span>
                </div>
                <br><br>

                <div class="date-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Join Date = {{$member-> join_date}}</span>
                </div>     
                
            </div>
              
               <div class="button3">
                <form action="/member/{{$member->id}}" method="POST">
                        @csrf
                        @method('delete')
                   <a class="btn-edit"  href="/member/edit/{{$member->id}}"> Edit </a>
                    <button class="btn-delete" type="submit"> Delete </button>
                </form>
            
            
       
                
            </div>  
    </div>
    @endsection