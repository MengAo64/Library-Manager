<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("showmember.css") }}">
    <title>Document</title>
</head>
<body>
    <nav>
<a href="#"><img src="img/logo.jpeg" alt="logo" width="240px"></a>
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Manage Books</a></li>
        <li><a href="#">Manage Members</a></li>
        <li><a href="#">Records</a></li>
    </ul>
</nav>
<div class="kotak">
<div class="add">
            <h1>Member information</h1>
            </div>
            <br> <br>

            <div class="kotak-input">


                <div class="nama-add"><span class="input-group-text nama-inp">Name = {{$member-> name}}</span>
                </div>
                <br><br>

                <div class="date-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Join Date = {{$member-> join_date}}</span>
                </div>      
               <div class="button3">
                <button class="btn-delete" type="submit"> Delete </button>
                <button class="btn-edit" type="submit"> Edit </button>
            </div>
                
            </div>  
    </div>
</body>
</html>