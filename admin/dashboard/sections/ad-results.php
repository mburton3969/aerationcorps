<?php
				//Index...
				$aq = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `ad_source` = 'G'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$google = mysqli_num_rows($ag);
				//About...
				$aq = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `ad_source` = 'FB'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$fb = mysqli_num_rows($ag);
				//FAQ...
				$aq = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `ad_source` = 'FBP'";
				$ag = mysqli_query($conn, $aq) or die($conn->error);
				$fbp = mysqli_num_rows($ag);
							
				$atotal = $google + $fb + $fbp;
			?>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Sign-Ups From Ad Campaigns</h6>
								</div>
								<div class="pull-right">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div>
										<canvas id="ad_chart" height="191"></canvas>
									</div>	
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-blue mr-10 pull-left"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">Google Ads <?php echo round(($google / $atotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $google; ?> Sign-Ups</span></span>
											<div id="sparkline_1" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-green mr-10 pull-left"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">Facebook Ads <?php echo round(($fb / $atotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $fb; ?> Sign-Ups</span></span>
											<div id="sparkline_2" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
									<hr class="light-grey-hr row mt-10 mb-15"/>
									<div class="label-chatrs">
										<div class="">
											<span class="clabels clabels-lg inline-block bg-yellow mr-10 pull-left"></span>
											<span class="clabels-text font-12 inline-block txt-dark capitalize-font pull-left"><span class="block font-15 weight-500 mb-5">Facebook Posts <?php echo round(($fbp / $atotal * 100),2) . '%'; ?></span><span class="block txt-grey"><?php echo $fbp; ?> Sign-Ups</span></span>
											<div id="sparkline_3" class="pull-right" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>