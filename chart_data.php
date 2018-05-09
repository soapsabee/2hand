
<?php

$conn = new mysqli('localhost','root', 's5930213055*', 'myhand');
//ให้อ่านภาษาไทยได้ คอมเม้น devbanban.com 
mysqli_query($conn, "SET NAMES 'utf8' "); 
//ถ้าเชื่อมต่อฐานอข้มูลไม่ได้ให้แจ้งเตือน
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//เอาข้อมูลจากตารางมาแสดง
$query = "SELECT Product_Type,Count(*)AS num FROM product";
 
$result = $conn->query($query);
//เอาเข้ากระบวนการ jsonnnnnn
$jsonArray = array();
//loop ข้อมูลออกมา
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $jsonArrayItem = array();
    //label คือแนวนอน หรือเอาชื่อสินค้ามาแสดง
    $jsonArrayItem['label'] = $row['Product_Type'];
    //value แนวตั้ง
    $jsonArrayItem['value'] = $row['num'];
    array_push($jsonArray, $jsonArrayItem);
  }
}
//ปิดการเชื่อมต่อ
$conn->close();
header('Content-type: application/json; charset=utf-8');
//ลองแสดง json, run หน้านี้ลองดูได้เลย  
echo json_encode($jsonArray);
?>