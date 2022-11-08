<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Library | SignUp</title>

    <link rel="stylesheet" href="{{ asset("login.css") }}">
</head>
    <body>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <div class="wrapper">
            <div class="leftside">
                <img src="/img/logobuku.png"   alt="">
            </div>
            <div class="rightside">
                <div class="up">
                    <h1>SIGN IN!</h1>
                </div>
                
               
                <form action="" method="POST">
                    @csrf

                 <div class="isi">

                    <input type="text" name="name" placeholder="Enter Username" autocomplete="off">
                    <div class='bx bx-user-circle' style="font-size:21px;"></div>
                    @error('name')
                        <p style="color: red; font-size:13px; margin-left:7px; margin-bottom:5px">{{$message}}</p>
                     @enderror
                     <hr style="width: 80%; border-top: 1px solid black;">

                    <input name="password" type="Password" id="myInput" placeholder="Enter Password" autocomplete="off">                    
                    <div   class='bx bx-lock'  style="font-size:21px;"></div>
                    @error('password')
                        <p style="color: red; font-size:13px; margin-left:7px; margin-bottom:5px">{{$message}}</p>
                    @enderror
                    <hr style="width: 80%; border-top: 1px solid black;">
                    <input type="checkbox" onclick="myFunction()">Show Password
                 </div>
                 <div class="button">
                 <button class="login"  type="submit" >Login</button>
                 <a href="/register" style="text-decoration:none; color:#000; margin:2px 0 0 11px;">Create Account</a>
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