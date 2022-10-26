<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
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
    <form method="POST" action="{{url('member')}}">
        @csrf
        <div class="kotak">
            <div class="add">
            <h1>Add Member</h1>
            </div>
            <br> <br>

            <div class="kotak-input">


                <div class="nama-add"><span class="input-group-text nama-inp">Name =</span>
                <input class="inputnama" name="name" type="text" aria-label="First name" class="form-control" placeholder="Name">
                </div>
                <br><br>

                <div class="date-add">
                <span class="input-group-text" id="inputGroup-sizing-lg">Join Date =</span>
                <input class="inputdate" name="join_date"type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Join Date">
                </div>

            </div>    
        <br><br>
        <button class="btn-submit" type="submit"> Add </button>
        
        </div>
        </form>

        </body>
        </html>