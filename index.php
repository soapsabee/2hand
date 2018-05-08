<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" media="all" type="text/css">
</head>
<?php include("modalLogin.html"); ?>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger">
                <b>Jack'Jack</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#myModal" id="login">ลงชื่อเข้าใช้</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html">เทคโนโลยี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="photo.html">กีฬา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">ยานพาหนะ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">บ้านและสวน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">แฟชั่น</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">สุขภาพ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">เกม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">เครื่องดนตรี</a>
                    </li>
                </ul>
            </div>

            <div class="search">
                <input name="keyword" type="text" id="keyword" size="20">
                <input name="iFind" type="button" id="iFind" value="Find">
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class=" container text-center">
        <div class="row">
            <div class="col">
                <a href="buypage.php">
                    <img class="photo1 rounded-circle" src="images/buyicon.png" alt="">
                </a>
            </div>
            <div class="col">
                <a href="insertproduct.php">
                    <img class="photo2 rounded-circle" src="images/sellicon.png" alt="">
                </a>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="scriptlogin.js"></script>
</body>

</html>