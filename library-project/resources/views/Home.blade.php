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
     
{{-- 
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
  </div> --}}

  <div class="our-team" id="team">
    <div class="title2">
      <h2>Our Team</h2>
      <hr>
  <div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                      <img src="{{ asset("img/placeholder.jpg") }}" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Farel</h2>
                    <h4 class="job">Project Manager</h4>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <!--<img src="images/profile2.jpg" alt="" class="card-img">-->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Samuel</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <!--<img src="images/profile3.jpg" alt="" class="card-img">-->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Rizky</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <!--<img src="images/profile4.jpg" alt="" class="card-img">-->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Zaki</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <!--<img src="images/profile5.jpg" alt="" class="card-img">-->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Jagad</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <!--<img src="images/profile6.jpg" alt="" class="card-img">-->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Delila</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <!--<img src="images/profile7.jpg" alt="" class="card-img">-->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Reva</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <!--<img src="images/profile8.jpg" alt="" class="card-img">-->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Fahrel</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
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
        <p><a href="#team">Our Team</a></p>
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

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });


// var swiper = new Swiper(".swiper", {
//         slidesPerView: 3,
//         spaceBetween: 30,
//         slidesPerGroup: 3,
//         loop: true,
//         loopFillGroupWithBlank: true,
//         pagination: {
//           el: ".swiper-pagination",
//           clickable: true,
//         },
//         navigation: {
//           nextEl: ".swiper-button-next",
//           prevEl: ".swiper-button-prev",
//         },
//       });
</script>
@endsection
    
@endsection