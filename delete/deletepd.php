<?php
$connect = mysqli_connect("localhost","root","","secondhand");
$sql = 'DELETE product.*, product_image.* FROM product,product_image 
WHERE product.Product_ID=product_image.Product_ID AND product.Product_ID="'.$_POST['id'].'"';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error();
    echo '<br>';
    die('Can not access database!');
} else {
    echo '<center>';
    echo '<br>';
    echo '<table border="1" cellpadding="3">';
    echo '<tr>';
    echo '<td>';
    echo 'Congratulation! Delete Complete!';
	echo '</td>';
    echo '</tr>';
	echo '</table>';
}        
?>