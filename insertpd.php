<?php

session_start();
$connect = mysqli_connect('localhost','root','s5930213055*','myhand');

$filepic = array();

if(isset($_FILES['picfile1']['tmp_name'])){
    $newpath1 = "product_img/".$_FILES['picfile1']['name'];
   move_uploaded_file($_FILES['picfile1']['tmp_name'],$newpath1);
}else{
    $_FILES['picfile1']['name'] = "product_img/default.jpg";
}
if(isset($_FILES['picfile2']['tmp_name'])){
   $newpath2 = "product_img/".$_FILES['picfile2']['name'];
   move_uploaded_file($_FILES['picfile2']['tmp_name'],$newpath2);
}else{
    $_FILES['picfile2']['name'] = "product_img/default.jpg";
}
if(isset($_FILES['picfile3']['tmp_name'])){
   $newpath3 = "product_img/".$_FILES['picfile3']['name'];
   move_uploaded_file($_FILES['picfile3']['tmp_name'],$newpath3);
}else{
    $_FILES['picfile3']['name'] = "product_img/default.jpg";
}
if(isset($_FILES['picfile4']['tmp_name'])){
   $newpath4 = "product_img/".$_FILES['picfile4']['name'];
   move_uploaded_file($_FILES['picfile4']['tmp_name'],$newpath4);
}else{
    $_FILES['picfile4']['name'] = "product_img/default.jpg";
}
if(isset($_FILES['picfile5']['tmp_name'])){
   $newpath5 = "product_img/".$_FILES['picfile5']['name'];
   move_uploaded_file($_FILES['picfile5']['tmp_name'],$newpath5);
}else{
    $_FILES['picfile5']['name'] = "product_img/default.jpg";
}
if(isset($_FILES['picfile6']['tmp_name'])){
    $newpath6 = "product_img/".$_FILES['picfile5']['name'];
    move_uploaded_file($_FILES['picfile6']['tmp_name'],$newpath6);
 }else{
     $_FILES['picfile6']['name'] = "product_img/default.jpg";
 }

 if(isset($_FILES['picfile7']['tmp_name'])){
    $newpath7 = "product_img/".$_FILES['picfile5']['name'];
    move_uploaded_file($_FILES['picfile7']['tmp_name'],$newpath7);
 }else{
     $_FILES['picfile7']['name'] = "product_img/default.jpg";
 }

 if(isset($_FILES['picfile8']['tmp_name'])){
    $newpath8 = "product_img/".$_FILES['picfile5']['name'];
    move_uploaded_file($_FILES['picfile8']['tmp_name'],$newpath8);
 }else{
     $_FILES['picfile8']['name'] = "product_img/default.jpg";
 }

 if(isset($_FILES['picfile9']['tmp_name'])){
    $newpath9 = "product_img/".$_FILES['picfile9']['name'];
    move_uploaded_file($_FILES['picfile9']['tmp_name'],$newpath9);
 }else{
     $_FILES['picfile9']['name'] = "product_img/default.jpg";
 }





 array_push($filepic,$_FILES['picfile1']['name']);
 array_push($filepic,$_FILES['picfile2']['name']);
 array_push($filepic,$_FILES['picfile3']['name']);
 array_push($filepic,$_FILES['picfile4']['name']);
 array_push($filepic,$_FILES['picfile5']['name']);
 array_push($filepic,$_FILES['picfile6']['name']);
 array_push($filepic,$_FILES['picfile7']['name']);
 array_push($filepic,$_FILES['picfile8']['name']);
 array_push($filepic,$_FILES['picfile9']['name']);

$sql = 'SELECT Product_ID FROM product ORDER BY Product_ID DESC LIMIT 1';
$query = mysqli_query($connect,$sql);
$resultid = mysqli_fetch_array($query,MYSQLI_NUM);
$productid = $resultid[0]+1;

$sql = 'INSERT INTO product (Product_ID, Product_Name, IMG_HEAD, User_Name, Product_Price, Product_Date, Product_Locate, Product_Ampher, Product_Info, Telephone, Product_Type) VALUES("'.$productid.'","'.$_POST['headproduct'].'","'.$_FILES['picfile1']['name'].'","Soap","'.$_POST['pdprice'].'",NOW(),"'.$_POST['province'].'","'.$_POST['ampher'].'","'.$_POST['info_pd'].'","'.$_POST['tel_phone'].'","'.$_POST['typeproduct'].'")';
$query = mysqli_query($connect,$sql);

if(!$query){

    die(mysqli_error($connect));

}
else{
    
    echo "OK";
}
$i = 0;
while($i < count($filepic)){$sql = 'INSERT INTO product_image (IMG_ID,IMG_NAME,Product_ID) VALUES(NULL,"'.$filepic[$i].'","'.$productid.'")'; $i++;}
if(!$query){

    die(mysqli_error($connect));

}
else{
    
    echo "OK";
}

?>