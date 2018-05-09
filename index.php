<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Jack'Jack</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <?php
			include('header.php')
		?>
        <?php
			include('left_siderbar.php')
		?>        
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product</h4>
                                <h6 class="card-subtitle">รายชื่อสินค้าทั้งหมด</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="16%">Product ID</th>
                                                <th width="38%">Product Name</th>
                                                <th width="35%">Username</th>
                                                <th width="11%">Product Price</th>
                                                <th width="11%">Product Date</th>
                                                <th width="30%">Product Locate</th>
                                                <th width="30%">Product Ampher</th>
                                                <th width="11%">Product Info</th>
                                                <th width="30%">Telephone</th>
                                                <th width="11%">Product Type</th>
                                                <th width="11%">Edit</th>
                                            </tr>
                                        </thead>
										<tbody>
									<?php
										
									include ('connect_db.php');



								   $sql = "SELECT * FROM product ";

								   $query = mysqli_query($conn,$sql);

									while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {  ?>
										
									        <tr>
                                                <td><?php echo $result['Product_ID']; ?></td>
                                                <td><?php echo $result['Product_Name'];?></td>
                                                <td><?php echo $result['User_Name']; ?></td>
                                                <td><?php echo $result['Product_Price']; ?></td>
                                                <td><?php echo $result['Product_Date']; ?></td>
                                                <td><?php echo $result['Product_Locate']; ?></td>
                                                <td><?php echo $result['Product_Ampher']; ?></td>
                                                <td><?php echo $result['Product_Info']; ?></td>
                                                <td><?php echo $result['Telephone']; ?></td>
                                                <td><?php echo $result['Product_Type']; ?></td>

                                                <td>													
													<a   href="delete.php?p_id=<?php echo $result['Product_ID']; ?>" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10" onclick="return confirm('Confirm Delete  !!!')"><i class="fa fa-remove"></i>&nbsp;delete</a>
												
												</td>
                                            </tr>	
										
									
									<?php 
									
									}
	
										
									?>	
										  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <footer class="footer">GG</footer>
        </div>
    </div>
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>