<?php

session_start();
$connect = mysqli_connect('localhost','root','s5930213055*','myhand');



if(isset($_FILES['picfile1']['tmp_name'])){
    $newpath1 = "image/".$_FILES['picfile1']['name'];
   move_uploaded_file($_FILES['picfile1']['tmp_name'],$newpath1);
}else{
    $_FILES['picfile1']['name'] = "image/dfpic.png";
}
if(isset($_FILES['picfile2']['tmp_name'])){
   $newpath2 = "image/".$_FILES['picfile2']['name'];
   move_uploaded_file($_FILES['picfile2']['tmp_name'],$newpath2);
}else{
    $_FILES['picfile2']['name'] = "image/dfpic.png";
}
if(isset($_FILES['picfile3']['tmp_name'])){
   $newpath3 = "image/".$_FILES['picfile3']['name'];
   move_uploaded_file($_FILES['picfile3']['tmp_name'],$newpath3);
}else{
    $_FILES['picfile3']['name'] = "image/dfpic.png";
}
if(isset($_FILES['picfile4']['tmp_name'])){
   $newpath4 = "image/".$_FILES['picfile4']['name'];
   move_uploaded_file($_FILES['picfile4']['tmp_name'],$newpath4);
}else{
    $_FILES['picfile4']['name'] = "image/dfpic.png";
}
if(isset($_FILES['picfile5']['tmp_name'])){
   $newpath5 = "image/".$_FILES['picfile5']['name'];
   move_uploaded_file($_FILES['picfile5']['tmp_name'],$newpath5);
}else{
    $_FILES['picfile5']['name'] = "image/dfpic.png";
}

$sql = 'INSERT INTO product (Product_ID, Product_Name, IMG_HEAD, User_Name, Product_Price, Product_Date, Product_Locate, Product_Ampher, Product_Info, Telephone, Product_Type) VALUES(NULL,"'.$_POST['headproduct'].'","'.$_FILES['picfile1']['name'].'","Soap","'.$_POST['pdprice'].'",NOW(),"'.$_POST['province'].'","'.$_POST['ampher'].'","'.$_POST['info_pd'].'","'.$_POST['tel_phone'].'","'.$_POST['typeproduct'].'")';
$query = mysqli_query($connect,$sql);

if(!$query){

    die(mysqli_error($connect));

}
else{
    echo $_POST['ampher'];
    echo "OK";
}

?>