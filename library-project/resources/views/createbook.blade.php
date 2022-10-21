<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createbook.css">
    <title>Document</title>
</head>
<body>
<nav>
        <a href="#"><img src="img/logo.jpeg" alt="logo" width="240px"></a>
        <ul>
            <li><a href="/home">Dashboard</a></li>
            <li><a href="#">Manage Books</a></li>
            <li><a href="#">Manage Members</a></li>
            <li><a href="#">Records</a></li>
        </ul>
    </nav>


    <div class="kotak">
        <div class="kotak-left">
            <input type="file" accept="image/png, image/jpeg" class="file-cover">
            <div class="preview-box">
                <img src="" width="100%" id="preview-img" alt="">
            </div>   
        </div>
        
        <div class="kotak-right">
            <div class="titlebook"><div class="judultitle">Title</div><input class="input" type="text" placeholder="Input Title"></div>
            <div class="titlebook"><div class="judultitle">Author</div><input  class="input" type="text" placeholder="Author"></div>
            <div class="titlebook"><div class="judultitle">Publisher</div><input class="input" type="text" placeholder="Publisher"></div>
            <div class="titlebook"><div class="judultitle">Publication Date</div><input class="input" type="text" placeholder="Publication Date"></div>
        </div>
    </div>

            
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
</body>
</html>