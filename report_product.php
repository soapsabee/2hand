<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

<form action="report_product.php" method='post'>
     เลือก เดือน-ปี <select name="month" id="">
          <option value="01">มกราคม</option>
          <option value="02">กุมภาพันธ์</option>
          <option value="03">มีนาคม</option>
          <option value="04">เมษายน</option>
          <option value="05">พฤษภาคม</option>
          <option value="06">มิถุนายน</option>
          <option value="07">กรกฎาคม</option>
          <option value="08">สิงหาคม</option>
          <option value="09">กันยายน</option>
          <option value="10">ตุลาคม</option>
          <option value="11">พฤศจิกายน</option>
          <option value="12">ธันวาคม</option>
          
      </select>

      <select name="year" id="">
          <option value="2018">2018</option>
          <option value="2018">2019</option>
          <option value="2018">2020</option>
      </select>

      <input type="submit" value="find">
</form>

<?php
    
    if(isset($_POST['month']) && isset($_POST['year']) ){
        $year = $_POST['year'];
        $month = $_POST['month'];
        $connect = mysqli_connect('localhost','root','s5930213055*','myhand');
        $sql = "SELECT User_Fname,User_Lname,product.User_name,Day(Product_Date),COUNT(*) AS 'num' FROM product INNER JOIN User ON product.User_Name = User.User_Name Where Product_Date LIKE '$year-$month%'";
        $query = mysqli_query($connect,$sql);
        $total = 0;

?>
   
    <table border="solid 5px">
        <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>จำนวนครั้งที่ประกาศขาย</th>
        </tr>
<?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
        <tr>
          <td><?php echo $result['User_Fname']?></td>
          <td><?php echo $result['User_Lname']?></td>
          <td><?php echo $result['User_name']; ?></td>
            <td><?php echo $result['num']; ?></td>
        </tr>
     <?php $total = $total + $result['num']; ?>
<?php  }?>

        </table>
         Total:<?php echo $total; ?>
      
   <?php  }else{

       echo "กรุณาระบุ เดือน-ปี";
       
   } ?>

   <br>
   <br>
   <br>
   <!--ตาราง เลือกสินค้าที่มีตามจังหวัดต่างๆ -->

   <?php $connect = mysqli_connect('localhost','root','','Location');
         $sql = 'SELECT name_th FROM provinces';
         $query = mysqli_query($connect,$sql);
   ?>
   <form action="report_product.php" method='post'>
    กรุณาระบุจังหวัด:
     <select name="province" id="">
     <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
        <option value="<?php echo $result['name_th']; ?>"><?php echo $result['name_th']; ?></option>
     <?php } ?>
     </select>

     <button type="submit">ค้นหา</button>
        
    </form>

    <?php
    
        if(isset($_POST['province'])){
            $province = $_POST['province'];
            $connect = mysqli_connect('localhost','root','','secondhand');
            $sql = 'SELECT Product_ID,Product_Name,User_Name,Product_Price,Product_Locate,Product_Ampher FROM product WHERE Product_Locate = "'.$province.'"';
            $query = mysqli_query($connect,$sql);

       
    
    ?>
     
     <table border="solid 50px;">
        <th>Product_ID</th>
        <th>ProductName</th>
        <th>Username</th>
        <th>Price</th>
        <th>Province</th>
        <th>Ampher</th>
        
 <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>

        <tr>
        <td><?php echo $result['Product_ID']; ?></td>
        <td><?php echo $result['Product_Name']; ?></td>
        <td><?php echo $result['User_Name']; ?></td>
        <td><?php echo $result['Product_Price']; ?></td>
        <td><?php echo $result['Product_Locate']; ?></td>
        <td><?php echo $result['Product_Ampher']; ?></td>
        </tr>
 <?php  } ?>
     </table>

        <?php } ?>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>