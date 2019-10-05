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