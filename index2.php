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
                                <h4 class="card-title">Member</h4>
                                <h6 class="card-subtitle">รายชื่อสมาชิกทั้งหมด</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="16%">username</th>
                                                <th width="38%">FirstName</th>
                                                <th width="35%">lastname</th>
                                                <th width="11%">gender</th>
                                                <th width="11%">Date of Birth</th>
                                                <th width="30%">address</th>
                                                <th width="30%">Telephone</th>
                                                <th width="11%">email</th>
                                                <th width="11%">Edit</th>
                                            </tr>
                                        </thead>
										<tbody>
									<?php
										
                                    include ('connect_db.php');
                                    
								   $sql = "SELECT * FROM user ";

								   $query = mysqli_query($conn,$sql);

									while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {  ?>
										
									        <tr>
                                                <td><?php echo $result['username']; ?></td>
                                                <td><?php echo $result['Fname'];?></td>
                                                <td><?php echo $result['Lname']; ?></td>
                                                <td><?php echo $result['gender']; ?></td>
                                                <td><?php echo $result['dob']; ?></td>
                                                <td><?php echo $result['address']; ?></td>
                                                <td><?php echo $result['telephone']; ?></td>
                                                <td><?php echo $result['email']; ?></td>

                                                <td>
													<a  href="delete2.php?p_id=<?php echo $result['username']; ?>"  class="btn btn-danger btn-flat btn-addon btn-xs m-b-10" onclick="return confirm('Confirm Delete  !!!')"><i class="fa fa-remove"></i>&nbsp;delete</a>
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