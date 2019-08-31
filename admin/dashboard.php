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
				
     <?php
				//Index...
				$aq = "SELECT * FROM `site_analytics` WHERE `inactive` != 'Yes' AND `page` = 'index.php'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$index = mysqli_num_rows($ag);
				//About...
				$aq = "SELECT * FROM `site_analytics` WHERE `inactive` != 'Yes' AND `page` = 'about-us.php'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$about = mysqli_num_rows($ag);
				//FAQ...
				$aq = "SELECT * FROM `site_analytics` WHERE `inactive` != 'Yes' AND `page` = 'faq.php'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$faq = mysqli_num_rows($ag);
				//Services...
				$aq = "SELECT * FROM `site_analytics` WHERE `inactive` != 'Yes' AND `page` = 'services.php'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$services = mysqli_num_rows($ag);
				//Sign-Up...
				$aq = "SELECT * FROM `site_analytics` WHERE `inactive` != 'Yes' AND `page` = 'sign-up.php'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$sign_up = mysqli_num_rows($ag);
				//Contact...
				$aq = "SELECT * FROM `site_analytics` WHERE `inactive` != 'Yes' AND `page` = 'contact.php'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$contact = mysqli_num_rows($ag);
							
				$ttotal = $index + $about + $faq + $services + $sign_up + $contact;
			?>

            	<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Page Traffic Analytics</h6>
								</div>
								<div class="pull-right">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div>
										<canvas id="chart_6" height="191"></canvas>
									</div>	
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">Home Page <?php echo round(($index / $ttotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $index; ?> visits</span></span>
											<div id="sparkline_1" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-green mr-10 pull-left"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">About Page <?php echo round(($about / $ttotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $about; ?> visits</span></span>
											<div id="sparkline_2" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-yellow mr-10 pull-left"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">FAQs Page <?php echo round(($faq / $ttotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $faq; ?> visits</span></span>
											<div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-red mr-10 pull-left"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">Services Page <?php echo round(($services / $ttotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $services; ?> visits</span></span>
											<div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-black mr-10 pull-left" style="background:black;"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">Sign Up Page <?php echo round(($sign_up / $ttotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $sign_up; ?> visits</span></span>
											<div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-orange mr-10 pull-left" style="background:orange;"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">Contact Page <?php echo round(($contact / $ttotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $contact; ?> visits</span></span>
											<div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
								
								
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
</body>
	<script>
		if( $('#chart_6').length > 0 ){
		var ctx6 = document.getElementById("chart_6").getContext("2d");
		var data6 = {
			 labels: [
			"Home",
			"About",
			"FAQ",
			"Services",
			"Sign Up",
			"Contact"
		],
		datasets: [
			{
				data: [<?php echo $index; ?>,<?php echo $about; ?>,<?php echo $faq; ?>,<?php echo $services; ?>,<?php echo $sign_up; ?>,<?php echo $contact; ?>],
				backgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701",
					"red",
					"black",
					"orange"
				],
				hoverBackgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701",
					"red",
					"black",
					"orange"
				]
			}]
		};
		
		var pieChart  = new Chart(ctx6,{
			type: 'pie',
			data: data6,
			options: {
				animation: {
					duration:	3000
				},
				responsive: true,
				maintainAspectRatio:false,
				legend: {
					display:false
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Roboto'"
				},
				elements: {
					arc: {
						borderWidth: 0
					}
				}
			}
		});
	}
	</script>

</html>
