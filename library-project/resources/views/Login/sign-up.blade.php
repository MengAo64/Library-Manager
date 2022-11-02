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
                    <h1>SIGN UP!</h1>
                </div>
                <form action="" method="POST">
                    @csrf
                 <div class="isi">

                    <input type="text" name="name" placeholder="Enter Username">
                    <div class='bx bx-user-circle' style="font-size:21px;"></div>
                    <hr style="width: 80%; border-top: 1px solid black;">

                    <input type="email"  name="email" placeholder="Enter Email">
                    <div  class='bx bx-envelope'  style="font-size:21px;"></div>
                    <hr style="width: 80%; border-top: 1px solid black;">

                    <input type="Password" id="myInput" name="password" placeholder="Enter Password">
                    <div   class='bx bx-lock'  style="font-size:21px;"></div>
                    <hr style="width: 80%; border-top: 1px solid black;">
                    <input type="checkbox" onclick="myFunction()">Show Password
                 </div>
                 <div>
                 <button class="register"  type="submit" >Register</button>
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