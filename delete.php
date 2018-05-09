<?php
//connect db
include('connect_db.php');

//get value
$p_id = $_GET['Product_ID'];


$sql = "delete from profile where Product_ID = '$p_id' ";
$query = mysqli_query($conn,$sql);



//check sql
if($query){
header('Location:ex_table.php');

}else{
echo "SQL ERROR";
}


?>

