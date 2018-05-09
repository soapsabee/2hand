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
													<a href="delete.php?p_id=<?php echo $result['Product_ID']; ?>" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10" onclick="return confirm('Confirm Delete  !!!')"><i class="fa fa-remove"></i>&nbsp;delete</a>
												
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