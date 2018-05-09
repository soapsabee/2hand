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
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<<<<<<< HEAD
    
=======

>>>>>>> 7bd4880bece598be054dade5ef3d5d17abdf5b13
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
        <?php session_start();
        $strAction = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($strAction==""){
            $message = "Please Login!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>window.location.href = "index.php";</script>';
            exit(); 
        }else{
            $connect = mysqli_connect("localhost","root","","secondhand");
            $sql = 'SELECT picfile FROM user WHERE username ="'.$_SESSION['username'].'"';
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo '<img class="pic2 rounded-circle" src="images/'.$row['picfile'].'" alt="">&nbsp;';
                }
                
            }
            $sql = 'SELECT Fname FROM user WHERE username ="'.$_SESSION['username'].'"';
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo '<a class="navbar-brand js-scroll-trigger" href="index2.php">';
            echo '<b>'.$row['Fname'].'</b>';
            echo '</a>';
                }
                
            }
        }
        mysqli_close($connect);
          ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="personal.php" >แก้ไขข้อมูลผู้ใช้</a>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=tech">เทคโนโลยี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=sport">กีฬา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=car">ยานพาหนะ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=home">บ้านและสวน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=fashion">แฟชั่น</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=healty">สุขภาพ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=games">เกม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=music">เครื่องดนตรี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="clearsession.php" >ออกจากระบบ</a>
                    </li>
                </ul>
            </div>

            <div class="search">
<<<<<<< HEAD
                <input name="keyword" type="text" id="keyword" size="20">
                <input name="iFind" type="button" id="iFind" value="Find">
=======
                <form method='get' action='buypage.php' > 
                    <input name="keyword" type="text" id="keyword" size="20">
                    <input name="iFind" type="submit" id="iFind" value="Find">
                </form>
>>>>>>> 7bd4880bece598be054dade5ef3d5d17abdf5b13
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
<<<<<<< HEAD
                <a href="buypage.html">
=======
                <a href="buypage.php">
>>>>>>> 7bd4880bece598be054dade5ef3d5d17abdf5b13
                    <img class="photo1 rounded-circle" src="images/buyicon.png" alt="">
                </a>
            </div>
            <div class="col">
<<<<<<< HEAD
                <a href="insertproduct.html">
=======
                <a href="insertproduct.php">
>>>>>>> 7bd4880bece598be054dade5ef3d5d17abdf5b13
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