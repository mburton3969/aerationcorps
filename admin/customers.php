<?php
include '../global/php/connection.php';
include 'global/php/security.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aeration Corps | Back Office</title>
    <?php include 'global/sections/head.php'; ?>
</head>

<body>
	<!-- Preloader -->
	<?php include 'global/sections/preloader.php'; ?>
	<!-- /Preloader -->
    <div class="wrapper theme-4-active pimary-color-red">

    	<!--Navigation-->
    	<?php include 'global/sections/nav.php'; ?>
		
		
        <!-- Main Content -->
		<div class="page-wrapper"><!--Includes Footer-->

            <div class="container-fluid pt-25"><!--Main Content Here-->
				
     


        <div class="row">
					
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Customer Maintenance</h6>
								</div>
								<div class="pull-right">
									<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customerModal" onclick="load_form('New');"><i class="fas fa-plus mr-15" style="color:white;"></i> New Customer</button>
									<!--<div class="pull-left inline-block dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>New</a></li>
										</ul>
									</div>-->
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Last</th>
														<th>First</th>
														<th>Address</th>
														<th>City</th>
														<th>Neighborhood</th>
														<th>Date Added</th>
														<th>Source</th>
														<th>New</th>
														<th>Service Performed</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
                          <?php
                          $q = "SELECT * FROM `customers` ORDER BY `ID` DESC";
                          $g = mysqli_query($conn, $q) or die($conn->error);
                          while($r = mysqli_fetch_array($g)){
                            echo '<tr>
                                    <td>' . $r['ID'] . '</td>
                                    <td><span class="txt-dark">' . $r['lname'] . '</span></td>
                                    <td><span class="txt-dark">' . $r['fname'] . '</span></td>
                                    <td><span class="txt-dark">' . $r['address'] . ' ' . $r['address2'] . '</span></td>
                                    <td><span class="txt-dark">' . $r['city'] . '</span></td>
                                    <td><span class="txt-dark"></span></td>
                                    <td><span class="txt-dark">' . date("m/d/Y", strtotime($r['date'])) . '</span></td>
                                    <td><span class="txt-dark">' . $r['source'] . '</span></td>
                                    <td><span class="txt-dark">';
                              if($r['cust_type'] == 'New'){
                                echo 'Yes';
                              }else{
                                'No';
                              }
                              echo '</span></td>
                                    <td><span class="txt-dark">';
                              if($r['serviced_date'] == '0000-00-00'){
                                //Not Serviced Yet...
                              }else{
                                echo date("m/d/Y", strtotime($r['serviced_date']));
                              }
                              echo '</span></td>
                                    <td>
                                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#customerModal" onclick="load_form(\'Edit\',' . $r['ID'] . ');"><i class="fas fa-pencil-alt"></i> Edit</button>
                                      <button type="button" class="btn btn-danger btn-sm" onclick="remove_customer(' . $r['ID'] . ',this);"><i class="fas fa-trash"></i> Cancel</button>
                                    </td>
                                  </tr>';
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
				<!-- /Row -->

				
	
			
			</div>
			
			
			<!-- Footer -->
			<?php include 'global/sections/footer.php'; ?>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!--Footer-->
	<?php include 'global/sections/includes.php'; ?>
  <script src="customers/js/customer-form-handler.js"></script>
  <script src="../global/js/jquery.mask.js"></script>
  <script>
			$(document).ready(function($){
  			$('.phone_us').mask('000.000.0000');
  			$('.zipCode').mask('00000');
			});
		</script>
</body>
  <?php include 'customers/modals/customer-modal.php'; ?>
</html>
