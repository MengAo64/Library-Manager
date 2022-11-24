<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Library | SignUp</title>

    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
</head>
    <body>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <div class="wrapper">
            <div class="leftside">
                <img src="/img/logobuku.png"   alt="">
            </div>
            <div class="rightside">
                <div class="up">
                    <h1>SIGN UP!</h1>
                </div>
                <form action="" method="POST">
                    @csrf
                 <div class="isi">

                    <input type="text" name="name" placeholder="Enter Username" autocomplete="off" value="{{old ('name')}}">
                    <div class='bx bx-user-circle' style="font-size:21px;"></div>
                     <hr style="width: 80%; border-top: 1px solid black;">
                     @error('name')
                        <p style="color: red; font-size:13px; margin-left:7px;  margin-bottom:5px">{{$message}}</p>
                     @enderror

                    <input type="email"  name="email" placeholder="Enter Email" autocomplete="off" value="{{old ('email')}}">
                    <div  class='bx bx-envelope'  style="font-size:21px;"></div>
                     <hr style="width: 80%; border-top: 1px solid black;">
                    @error('email')
                        <p style="color: red; font-size:13px; margin-left:7px;  margin-bottom:5px">{{$message}}</p>
                     @enderror

                    <input type="Password" id="myInput" name="password" placeholder="Enter Password" autocomplete="off" value="{{old ('password')}}">
                    <div   class='bx bx-lock'  style="font-size:21px;"></div>
                     <hr style="width: 80%; border-top: 1px solid black;">
                     @error('password')
                        <p style="color: red; font-size:13px; margin-left:7px;  margin-bottom:5px">{{$message}}</p>
                     @enderror
                    <input type="checkbox" onclick="myFunction()" height="20px">Show Password
                 </div>
                 <div class="button" style="margin-top: -5px;">
                 <button class="register"  type="submit" >Register</button>
                 <a href="/login" style="text-decoration:none; color:#000; margin:4px 0 0 57px;">Login</a>
                 </div>
                </form>
            </div>
        </div>
        <script>
            function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        </script>
    </body>
</html>