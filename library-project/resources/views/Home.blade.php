@extends('layout/main')
@section('title')
Library | Dashboard
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset("home.css") }}">
<link rel="stylesheet"href="{{ asset("https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css") }}"/>
<div
style="--swiper-navigation-color: #000; --swiper-pagination-color: #000"
class="swiper mySwiper2"
>
@endsection

@section('content')
  
<div class="kotak">
   {{-- <div class="container my-5">
    @if (Auth::user())
       <h1 style="margin-left: 50px; padding-top:20px;">Selamat Datang, {{Auth::user()->name}}</h1>
    @else
        <h1 style="text-align: center;">Anda Harus Login Terlebih dahulu Untuk mengakses Fitur</h1>
    @endif
   </div> --}}
   <div class="container" id="Welcome">
    <div class="left">
         <div class="title">
          <h1>Online</h1>
          <h2>Library</h2>
         </div>
         <div class="desk">
           <span class="teks"></span>
           <p>Digital Library is a library that stores data, be it books, pictures and distributes them using a computer network</p>
         </div>
    </div>

    <div class="right">
       <img src="{{ asset("img/preview.png") }}" alt="">
    </div>
     
  </div>

     
  <div class="about" id="about">
    <img src="{{ asset("img/about-library.gif") }}" alt="" style="width: 400px; float: left; margin-left:10px;">
    <p>A digital library, also called an online library, an internet library,or a digital collection is an online database of digital objects that can include text, still images, digital documents, or other digital media formats or a library accessible through the internet.</p>
   <p>Objects can consist of digitized content like print or photographs. In addition to storing content, digital libraries provide means for organizing, searching, and retrieving the content contained in the collection.</p>    
   <p>Digital libraries can vary immensely in size and scope, and can be maintained by individuals or organizations.</p>
   </div>
     

<div class="swiperBooks" id="swiperBooks">
  <div class="title2">
    <h2>Provided Books</h2>
    <hr>
  </div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content2">
            <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
          </div>
          <div class="teks">
            <h1 >Biography</h1>
            <p>A biography is simply the story  <br>of a real person's life.</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content2">
            <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
          </div>
          <div class="teks">
            <h1 >Biography</h1>
            <p>A biography is simply the story  <br>of a real person's life.</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content2">
            <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
          </div>
          <div class="teks">
            <h1 >Biography</h1>
            <p>A biography is simply the story  <br>of a real person's life.</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content2">
            <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
          </div>
          <div class="teks">
            <h1 >Biography</h1>
            <p>A biography is simply the story  <br>of a real person's life.</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content2">
            <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
          </div>
          <div class="teks">
            <h1 >Biography</h1>
            <p>A biography is simply the story  <br>of a real person's life.</p>
          </div>
        </div>
        <div class="swiper-slide"> 
          <div class="content2">
          <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
            </div>
           <div class="teks">
          <h1 >Fiction</h1>
          <p>something invented by the imagination or feigned
            specifically : an invented story</p>
        </div>
      </div>
        <div class="swiper-slide"> 
          <div class="content2">
          <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
            </div>
           <div class="teks">
          <h1 >Fantasy </h1>
          <p>something you imagine, which might involve dragons,or an imaginary best friend</p>
        </div>
      </div>
        <div class="swiper-slide"> 
          <div class="content2">
          <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
            </div>
           <div class="teks">
          <h1 >Motivation</h1>
          <p>A book that contains the study of psychology to arouse enthusiasm for its readers</p>
        </div>
      </div>
        <div class="swiper-slide"> 
          <div class="content2">
          <img src="{{ asset("img/placeholder.jpg") }}" alt=""  style="width:120px; height:120px;border-radius: 10px; border:2px solid;">
            </div>
           <div class="teks">
          <h1 >Science</h1>
          <p>a book of knowledge</p>
        </div>
      </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>



  <div class="footer" id="footer">
    <div class="title-footer">
      <div class="footer1">
       <h2><b>Library</b></h2>
       <p>Here you can use rows and 
        <br>
        columns to organize 
        <br>
        your footer content.</p>
      </div>
      <div class="footer2">
        <h2><b>Home</b></h2>
        <p><a href="#Welcome">Welcome</a></p>
        <p><a href="#about">About</a></p>
        <p><a href="#swiperBooks">Provided books</a></p>
        <p><a href="#footer">Footer</a></p>
      </div>
      <div class="footer3">
        <h2><b>Contact</b></h2>
        <p><i class='bx bxs-home' style="font-size:17px; padding-right:5px;"></i>Jakarta,IND</p>
        <p><i class='bx bxs-envelope' style="font-size:17px; padding-right:5px;"></i>example@gmail.com</p>
        <p><i class='bx bxs-phone' style="font-size:17px; padding-right:5px;"></i>+62 123 456 78</p>
      </div>
    </div>
    
    <div class="bottom"> Copyright &copy; 2022 -Built by Our LIbrary</div>
  </div>

</div>
@section('js')
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
  let typed = new Typed(".teks", {
  strings: ["Welcome to our Library"],
  typeSpeed: 150,
  backDelay: 500,
  loop: true,
});

var swiper = new Swiper(".swiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>
@endsection
    
@endsection