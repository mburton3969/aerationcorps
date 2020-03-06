<?php
error_reporting(0);
include '../global/php/connection.php';
include 'global/php/security.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aeration Corps | Back Office</title>
  <?php include 'global/sections/head.php'; ?>
	<link href="customers/css/custom.css" rel="stylesheet" />
	<script src="customers/js/zillow-ls.js"></script>
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
				
				<div class="tab-content" id="mySubTabContent">
          <ul class="nav nav-tabs">
            <li class="nav-item active"><a data-toggle="tab" href="#pending" style="color:#DC0031;"><span class="glyphicon glyphicon-time"></span> Pending</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#serviced" style="color:#DC0031;"><span class="glyphicon glyphicon-ok"></span> Serviced</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#invoiced" style="color:#DC0031;"><span class="glyphicon glyphicon-usd"></span> Invoiced</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#deleted" style="color:#DC0031;"><span class="glyphicon glyphicon-trash"></span> Deleted</a></li>
					</ul>

          <div class="tab-pane active in" id="pending" role="tabpanel">
          <?php
              //Add Order Tracking Sections Here...
              include 'customers/sections/pending-orders-table.php';
           ?>
         </div>
         <div class="tab-pane fade" id="serviced" role="tabpanel">
          <?php
              include 'customers/sections/serviced-orders-table.php';
          ?>
          </div>
         <div class="tab-pane fade" id="invoiced" role="tabpanel">
          <?php
              include 'customers/sections/invoiced-orders-table.php';
          ?>
          </div>
					<div class="tab-pane fade" id="deleted" role="tabpanel">
          <?php
              include 'customers/sections/deleted-orders-table.php';
          ?>
          </div>
        </div>
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
  <script src="customers/js/customer-form-handler.js?cb=<?php echo $cache_buster; ?>"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="customers/js/custom.js"></script>
</body>
  <?php include 'customers/modals/customer-modal.php'; ?>
</html>
