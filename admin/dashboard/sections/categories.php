					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<?php
$q = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `serviced_date` = '0000-00-00' ORDER BY `ID` DESC";
$g = mysqli_query($conn, $q) or die($conn->error);
$prn = mysqli_num_rows($g);
?>
					<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-red">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $prn; ?></span></span>
													<span class="weight-500 uppercase-font txt-light block">Pending Orders</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-time txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
							
<?php
$q = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `serviced_date` != '0000-00-00' AND `invoiced_date` = '0000-00-00' ORDER BY `ID` DESC";
$g = mysqli_query($conn, $q) or die($conn->error);
$srn = mysqli_num_rows($g);
?>
					<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-blue">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $srn; ?></span></span>
													<span class="weight-500 uppercase-font txt-light block">Serviced Orders</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-check txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
			<?php
			$q = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `serviced_date` != '0000-00-00' AND `invoiced_date` != '0000-00-00' ORDER BY `ID` DESC";
			$g = mysqli_query($conn, $q) or die($conn->error);
			$irn = mysqli_num_rows($g);
			?>
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-green">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $irn; ?></span></span>
													<span class="weight-500 uppercase-font txt-light block">Invoiced Orders</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-money txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						
			<?php
			$q = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `serviced_date` = '0000-00-00' AND `invoiced_date` = '0000-00-00' AND `special_requests` != ''";
			$g = mysqli_query($conn, $q) or die($conn->error);
			$srrn = mysqli_num_rows($g);
			?>
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-yellow">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim"><?php echo $srrn; ?></span></span>
													<span class="weight-500 uppercase-font txt-light block">Special Requests</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-help txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						
</div>