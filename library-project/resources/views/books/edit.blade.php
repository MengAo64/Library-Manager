@extends('layout.main')
@section('title')
Library | Edit Book
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("createbook.css") }}">
@endsection
@section('content')
    

    <form method="POST" action="/book/{{$buku->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="kotak">
            <div class="kotak-left">
                <input type="file" accept="image/png, image/jpeg" class="file-cover" name="cover_image">
                <div class="preview-box">
                    <img src="/coverimg/{{ $buku->cover_image}}" width="100%" id="preview-img" alt="">
                </div>   
            </div>
            
            <div class="kotak-right">
                <div class="titlebook"><div class="judultitle">Title</div>
                <input class="input" type="text" placeholder="Input Title" name="title" value="{{$buku->title}}">
                @error('title')
                   <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>

                <div class="titlebook"><div class="judultitle">Author</div>
                <input  class="input" type="text" placeholder="Author" name="author" value="{{$buku->author}}">
                @error('author')
                    <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>

                <div class="titlebook"><div class="judultitle">Publisher</div>
                <input class="input" type="text" placeholder="Publisher" name="publisher" value="{{$buku->publisher}}">
                @error('publisher')
                    <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>

                <div class="titlebook"><div class="judultitle">Publication Date</div>
                <input class="input" type="date" placeholder="publication Date" name="publication_date" value="{{$buku->publication_date}}">
                @error('publication_date')
                <p style="color: red; font-size:13px; margin-left:7px;">{{$message}}</p>
                @enderror
                </div>

                
                <div class="titlebook"><div class="judultitle">Status</div>
                <input class="input2" type="radio"  name="status" value="{{$buku->status}}" <?php if($buku['status']=='Dipinjam') echo 'checked'?>>Dipinjam</div>
                <input class="input2" type="radio"  name="status" value="{{$buku->status}}" <?php if($buku['status']=='Tidak Dipinjam') echo 'checked'?>>Tidak Dipinjam</div>
                <button class="add" type="submit">Update Book</button>
                
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