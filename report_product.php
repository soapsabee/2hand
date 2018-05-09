<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <br>
<center><table bgcolor="white" border="5">
<tr>
<td>
<br>
                                                                <!--ตารางเลือกสินค้าเดือนปี-->
<form action="report_show1.php" method='post'>
     <center>ระบุ เดือน-ปี <select name="month" id="">
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

      <button type='submit' class="btn btn-success">ค้นหา</button>
</form>
<br>
<br>                                                               <!--จบตาราง1-->
   <!--ตาราง เลือกสินค้าที่มีตามจังหวัดต่างๆ -->

   <?php $connect = mysqli_connect('localhost','root','','Location');
   mysqli_query($connect, "SET NAMES UTF8");
         $sql = 'SELECT name_th FROM provinces';
         $query = mysqli_query($connect,$sql);
   ?>
   <form action="report_show2.php" method='post'>
   <center>กรุณาระบุจังหวัด:
     <select name="province" id="">
     <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
        <option value="<?php echo $result['name_th']; ?>"><?php echo $result['name_th']; ?></option>
     <?php } ?>
     </select>

     <button type='submit' class="btn btn-warning">ค้นหา</button>
     </center>   
    </form>
    <br>

    <?php $connect = mysqli_connect('localhost','root','','Location');
mysqli_query($connect, "SET NAMES UTF8");
      $sql = 'SELECT name_th FROM provinces';
      $query = mysqli_query($connect,$sql);
?>
<form action="report_show3.php" method='post'>
<center>กรุณาระบุจังหวัด:
  <select name="province" id="">
  <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
     <option value="<?php echo $result['name_th']; ?>"><?php echo $result['name_th']; ?></option>
  <?php } ?>
  </select>
  <center>ระบุ เดือน <select name="month" id="">
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
      </select></center>

  <button type='submit' class="btn btn-info">ค้นหา</button>
  </center>   
 </form>
 <br>
        </td>
        </tr>
        </table>
        </center>
<br>
<br>
<br>
<center><button type="button" class="btn btn-danger" onClick="window.location ='clearsession.php'">ออกจากระบบ</button></center>


   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>