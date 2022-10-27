<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="#"><img src="img/logo.jpeg" alt="logo" width="240px"></a>
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Manage Books</a></li>
        <li><a href="#">Manage Members</a></li>
        <li><a href="#">Records</a></li>
    </ul>
</nav>
<div class="kotak">
    <div class="">
        {{$member->name}}
        {{$member->join_date}}
    </div>
</body>
</html>