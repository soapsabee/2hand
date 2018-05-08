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
			else{
				
			
	while ($row=mysqli_fetch_array($result)){
							echo'<form name="frmDelete'.$row['Product_ID'].'" method="post" action="deletepd.php">'."\n";
								for($i=0;$i<$numfields;$i++){
									 $row[$i]."\n";									
							}
						echo '<input type="hidden" name="id" value="'.$row['Product_ID'].'">'."\n";
						echo '<input name="smtDel" type="submit" value="Delete" onClick="return confirmDelete();">'."\n";
						echo '</form>'."\n";
				}
			}
	mysqli_close($connect);
		}
?>