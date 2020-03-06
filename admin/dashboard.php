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
              <?php include 'dashboard/sections/analytics.php'; ?>

              <?php include 'dashboard/sections/categories.php'; ?>

              <?php include 'dashboard/sections/ad-results.php'; ?>
          </div>
				<!-- /Row -->

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
  <script src="dashboard/js/custom.js"></script>
	<!--Footer-->
	<?php include 'global/sections/includes.php'; ?>
</body>
<?php include 'dashboard/js/chart-data.php'; ?>

</html>
