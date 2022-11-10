@extends('layout.main')
@section('title')
Library | Createbook
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("createbook.css") }}">
@endsection
@section('content')
    

    <form method="POST" action="{{url('book')}}" enctype="multipart/form-data">
        @csrf
        <div class="kotak">
            <div class="kotak-left">
                <input type="file" accept="image/png, image/jpeg" class="file-cover" name="cover_image">
                <div class="preview-box">
                    <img src="" width="100%" id="preview-img" alt="">
                </div>   
            </div>
            
            <div class="kotak-right">
                <div class="titlebook">
                    <div class="judultitle">Title</div>
                    <input class="input" type="text" placeholder="Input Title" name="title" value="{{old ('title')}}">
                    @error('title')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                </div>
                
                <div class="titlebook">
                    <div class="judultitle">Author</div>
                    <input  class="input" type="text" placeholder="Author" name="author" value="{{old ('author')}}">
                    @error('author')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                </div>

                <div class="titlebook">
                    <div class="judultitle">Publisher</div>
                    <input class="input" type="text" placeholder="Publisher" name="publisher" value="{{old ('publisher')}}">
                    @error('publisher')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                </div>

                <div class="titlebook">
                    <div class="judultitle">Publication Date</div>
                    <input class="input" type="date" placeholder="publication Date" name="publication_date" value="{{old ('publication_date')}}">
                    @error('publication_date')
                        <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                    @enderror
                </div>


                <div class="titlebook">
                    <div class="judultitle">Status</div>
                <input class="input2" type="radio"  name="status" value="Dipinjam"  >Dipinjam</div>
                <input class="input2" type="radio"  name="status" value="Tidak Dipinjam" {{"checked"}} >Tidak Dipinjam</div>


                <button class="add" type="submit">Add</button>
                
            </div> 
           
            {{-- <a href="" class="add" type="submit">add</a> --}}
        </div>
    </form>
   

            
    </div>   
    <script>
        const imgInp = document.querySelector(".file-cover")
        const previewImg = document.getElementById("preview-img")

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                previewImg.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection