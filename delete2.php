<?php
//connect db
include('connect_db.php');

//get value
$p_id = $_GET['username'];


$sql = "delete from profile where username = '$p_id' ";
$query = mysqli_query($conn,$sql);



//check sql
if($query){
header('Location:ex_table.php');

}else{
echo "SQL ERROR";
}


?>

