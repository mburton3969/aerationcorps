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
				<?php 
				if($_SESSION['user_id'] == '1'){ 
					include 'dashboard/sections/customer-analytics.php'; 
					include 'dashboard/sections/filtered-analytics.php';
				} 
				?>	
			</div>
	
			
			</div>
			
			
			<!-- Footer -->
			<?php include 'global/sections/footer.php'; ?>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	<script src="../global/js/jquery.mask.js"></script>
  <script>
			$(document).ready(function($){
  			$('.phone_us').mask('000.000.0000');
  			$('.zipCode').mask('00000');
				$( ".date" ).datepicker();
			});
		</script>
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
		
		
	//Ad Chart...
	if( $('#ad_chart').length > 0 ){
		var ctx6 = document.getElementById("ad_chart").getContext("2d");
		var data6 = {
			 labels: [
			"Google",
			"Facebook",
			"Facebook Posts"
			//"Services",
			//"Sign Up",
			//"Contact"
		],
		datasets: [
			{
				data: [<?php echo $google; ?>,<?php echo $fb; ?>,<?php echo $fbp; ?>],
				backgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701"
					//"red",
					//"black",
					//"orange"
				],
				hoverBackgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701"
					//"red",
					//"black",
					//"orange"
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
