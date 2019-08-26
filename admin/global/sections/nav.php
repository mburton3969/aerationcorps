		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.php">
							<?php
               echo '<img class="brand-img" alt="brand" src="http://' . $_SERVER['HTTP_HOST'] . '/images/acpics/demo-aeration-logo.jpg" style="width:165px;margin-top:-18px;">';
              ?>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 mt-20 pull-left" href="javascript:void(0);" style="line-height:0px;"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				<!--<form id="search_form" role="search" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
					</div>
				</form>-->
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<!--<li>
						<a id="open_right_sidebar" class="mt-20" href="#" style="line-height:0px;"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
					</li>-->
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown" style="line-height:0px;">
							<i class="zmdi zmdi-account zmdi-hc-lg" style="line-height:3.5em;vertical-align:0px;"></i><span> <?php echo $_SESSION['op_full_name']; ?></span>
							<i class="zmdi zmdi-caret-down"></i>
							<!--<img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/>-->
							<!--<span class="user-online-status"></span>-->
						</a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<!--<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>My Account</span></a>
							</li>-->
              <li>
								<a href="mailto:support@marketforceapp.com?subject=Customer%20Portal%20Bug%20Report&body=I%20am%20having%20an%20issue%20with%20the%20following:"><i class="zmdi zmdi-bug"></i><span>Report A Bug</span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="login.php?logout=yes"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<?php include 'global/sections/left-sidebar.php'; ?>
		<!-- /Left Sidebar Menu -->
		
		<!-- Right Sidebar Menu -->
		<?php include 'global/sections/right-sidebar.php'; ?>
		<!-- /Right Sidebar Menu -->