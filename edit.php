<?php
echo $p_id = $_GET['p_id'];

$sql = "SELECT * FROM profile where p_id = '".$_GET["p_id"]."' ";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
?>