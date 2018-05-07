<?php 

$connect = mysqli_connect('localhost','root','','user');

if(!$connect){
 echo die(mysqli_error());
}

?>