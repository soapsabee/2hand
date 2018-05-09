<?php
if($_POST['user_name']==''){
    exit();
}

$connect = mysqli_connect('localhost','root','','secondhand');
$sql = 'SELECT User_Name FROM user WHERE User_Name="'.$_POST['user_name'].'"';
$query = mysqli_query($connect,$sql);

$row = mysqli_num_rows($query);

if($row > 0){
    echo '<span class="text-danger">Username นี้ใช้ไม่ได้</span>';
}
else{
    echo '<span class="text-success">Username นี้ท่านสามารถใช้ได้</span>';
}


?>