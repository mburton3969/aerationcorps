<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Navigation</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
<!-------------------------------------------------------------------DASHBOARD-------------------------------------------------------------------------------->
				<?php
				
			echo '<li>
					<a href="index.php">
						<div class="pull-left"><i class="fas fa-tachometer-alt mr-20"></i><span class="right-nav-text">Dashboard</span></div>';
			//echo '<div class="pull-right"><span class="label label-danger">1</span></div>';
			echo '<div class="clearfix"></div>
					</a>
				  </li>';
				
				?>

<!-------------------------------------------------------------------CUSTOMERS-------------------------------------------------------------------------------->
				<?php
				
			echo '<li>
					<a href="customers.php">
						<div class="pull-left"><i class="fas fa-users mr-20"></i><span class="right-nav-text">Customers</span></div>';
			//echo '<div class="pull-right"><span class="label label-danger">1</span></div>';
			echo '<div class="clearfix"></div>
					</a>
				  </li>';
				
				?>
				
<!-------------------------------------------------------------------MANAGE USERS-------------------------------------------------------------------------------->
				<?php
				
			echo '<li>
					<a href="users.php">
						<div class="pull-left"><i class="fas fa-user-lock mr-20"></i><span class="right-nav-text">Manage Users</span></div>';
			//echo '<div class="pull-right"><span class="label label-danger">1</span></div>';
				echo '<div class="pull-right"><span style="color:red;font-size:10px;">Coming Soon</span></div>';
			echo '<div class="clearfix"></div>
					</a>
				  </li>';
				
				?>
				
<!-------------------------------------------------------------------SERVICE REPORT-------------------------------------------------------------------------------->
				<?php
				
			echo '<li>
					<a href="service-list.php" target="_blank">
						<div class="pull-left"><i class="fas fa-clipboard-list mr-20"></i><span class="right-nav-text">Service Report</span></div>';
			//echo '<div class="pull-right"><span class="label label-danger">1</span></div>';
			echo '<div class="clearfix"></div>
					</a>
				  </li>';
				
				?>
				
<!-------------------------------------------------------------------SITE ANALYTICS-------------------------------------------------------------------------------->
				<?php
				
			echo '<li>
					<a href="analytics.php">
						<div class="pull-left"><i class="fas fa-chart-pie mr-20"></i><span class="right-nav-text">Site Analytics</span></div>';
			//echo '<div class="pull-right"><span class="label label-danger">1</span></div>';
				echo '<div class="pull-right"><span style="color:red;font-size:10px;">Coming Soon</span></div>';
			echo '<div class="clearfix"></div>
					</a>
				  </li>';
				
				?>


			</ul>
		</div>