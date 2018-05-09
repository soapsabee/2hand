<?php
if($_POST['user_name']==''){
    exit();
}

$connect = mysqli_connect('localhost','root','','secondhand');
<<<<<<< HEAD
$sql = 'SELECT username FROM user WHERE username="'.$_POST['user_name'].'"';
=======
$sql = 'SELECT User_Name FROM user WHERE User_Name="'.$_POST['user_name'].'"';
>>>>>>> 7bd4880bece598be054dade5ef3d5d17abdf5b13
$query = mysqli_query($connect,$sql);

$row = mysqli_num_rows($query);

if($row > 0){
    echo '&nbsp;<span class="text-danger">Username นี้มีผู้ใช้แล้ว กรุณาใช้ชื่ออื่น</span>';
}


?>