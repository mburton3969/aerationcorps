<?php
error_reporting(E_ALL);
include '../global/php/connection.php';
include 'global/php/security.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aeration Corps | Back Office</title>
    <?php include 'global/sections/head.php'; ?>
	<style>
		.dataTables_wrapper .dataTables_filter{
			float:none !Important;
			text-align:left !Important;
			margin-left:200px !Important;
		}
	</style>
	
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
  <script src="customers/js/customer-form-handler.js"></script>
  <script src="../global/js/jquery.mask.js"></script>
  <script>
			$(document).ready(function($){
  			$('.phone_us').mask('000.000.0000');
  			$('.zipCode').mask('00000');
				$( ".date" ).datepicker();
			});
		</script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script>
		setTimeout(function (){
    $('#pending_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]]
    } );
    $('#serviced_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]]
    } );
    $('#invoiced_table').DataTable( {
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]]
    } );
  },1000);
	</script>
</body>
  <?php include 'customers/modals/customer-modal.php'; ?>
</html>
