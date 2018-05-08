<!doctype html>
<html lang="en">
<?php 

//อย่าลืมลบออก //

 $connect = mysqli_connect('localhost','root','s5930213055*','myhand');
 $sql = 'SELECT Product_Name,IMG_HEAD,Product_Price,Product_Locate,Product_Ampher FROM product';
 $query = mysqli_query($connect,$sql);


?>

<head>
    <title>BUY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/buypage.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
</head>

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
                        <a class="nav-link js-scroll-trigger" href="index.html">เครื่องแต่งกายแฟชั่น</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="photo.html">สุขภาพและความงาม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">มือถือและอุปกรณ์เสริม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">ของเล่น สินค้าแม่และเด็ก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">สื่อบันเทิงและอุปกรณ์อิเล็กทรอนิกส์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contact.html">สินค้ามือสอง</a>
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
        <?php $numresult = mysqli_num_rows($query);
            if($numresult==0){
             echo "<h5 style=text-align:center;>ไม่มีเลยจ้า</h5>";
            }
        ?>
    <div class=" container text-center">
        <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
        <div class="row">
            <div class="p">
                <div class="col">
                    <img class="pphoto" src="product_img/<?php $result['IMG_HEAD']; ?> " alt="">
                    <h5 class="pname">
                        <b><?php echo $result['Product_Name']; ?> <b>
                    </h5>
                    <h6 class="price">
                        <p><?php echo $result['Product_Price']." บาท"; ?> </p>
                    </h6>
                    <p><?php echo "จังหวัด:".$result['Product_Locate']; echo "<br>อำเภอ:".$result['Product_Ampher']; ?>  </p>
                    <a href="#" class="btn btn-default">
                        <i class="addcart"></i>คลิกดูสินค้า</a>
                </div>
           </div>
       </div>
        <?php } ?>
    </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>

</html>