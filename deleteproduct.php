<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <script language="Javascript">
		function comfirmDelete(){
			return confirm('Are you sure you want to Delete this?');		
		}
		</script>
        <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <?php

$connect =mysqli_connect("localhost","root","","secondhand");
if(!isset($smtDelete)){
		$sql='select * from product';
		$result=mysqli_query($connect,$sql);
		$numrows= mysqli_num_rows($result);
		$numfields= mysqli_num_fields($result);
		
		if(!$result){
			echo '<b>Error</b>'.mysqli_errno().': '.mysqli_error().'<br>';
			}
			elseif ($numrows==0){
				echo '<b>Query executed successfully but no row returns!</b>';
			}
			else{
				echo '<table border="1" cellspacing="0" cellpadding="3">';
					echo '<tr>';
echo '<td>';
echo'Product_ID';
echo '</td>';
echo '<td>';
echo'Product_Name';
echo '</td>';
echo '<td>';
echo'IMG_HEAD';
echo '</td>';
echo '<td>';
echo'User_Name';
echo '</td>';
echo '<td>';
echo'Product_Price';
echo '</td>';
echo '<td>';
echo'Product_Date';
echo '</td>';
echo '<td>';
echo'Product_Locate';
echo '</td>';
echo '<td>';
echo'Product_Ampher';
echo '</td>';
echo '<td>';
echo'Product_info';
echo '</td>';
echo '<td>';
echo'Telephone';
echo '</td>';
echo '<td>';
echo'Product_Type';
echo '</td>';
echo '</tr>';				
	while ($row=mysqli_fetch_array($result)){
							echo'<form name="frmDelete'.$row['Product_ID'].'" method="post" action="deletepd.php">'."\n";
							echo '<tr>';
								for($i=0;$i<$numfields;$i++){
									echo '<td>'.$row[$i].'&nbsp;</td>'."\n";									
							}
						echo '<input type="hidden" name="id" value="'.$row['Product_ID'].'">'."\n";
						echo '<td><input name="smtDel" type="submit" value="Delete" onClick="return confirmDelete();"></td>'."\n";
						echo '</tr>'."\n";
						echo '</form>'."\n";
				}
				echo '</table>';
			}
}
	mysqli_close($connect);
?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>