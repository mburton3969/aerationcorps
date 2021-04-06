<?php
$q = "SELECT * FROM `customers` WHERE `inactive` != 'Yes' AND `serviced_date` != '0000-00-00' AND `invoiced_date` != '0000-00-00' ORDER BY `ID` DESC" . $addon;
$g = mysqli_query($conn, $q) or die($conn->error);
$rn = mysqli_num_rows($g);
?>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Customer Maintenance &nbsp; <small>[<?php echo $rn; ?> Invoiced Orders]</small> 
                  
                    <?php
                      if($_REQUEST['view'] == 'ALL'){
                        
                      }else{
                        echo '<a href="customers.php?view=ALL"><button type="button" class="btn btn-primary btn-sm">View All</button></a>';
                      }
                    ?>
                  </h6>
								</div>
								<div class="pull-right">
									<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customerModal" onclick="load_form('New');"><i class="fas fa-plus mr-15" style="color:white;"></i> New Customer</button>
									<!--<div class="pull-left inline-block dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Delete</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>New</a></li>
										</ul>
									</div>-->
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="invoiced_table" class="table table-hover mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Last</th>
														<th>First</th>
														<th>Address</th>
														<th>City</th>
														<th>Zip</th>
														<th>Lot Size</th>
														<th>Date Added</th>
														<th>Source</th>
														<th>New</th>
														<th>Serviced</th>
														<th>Invoiced</th>
														<th>Special Req</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
                          <?php
                          while($r = mysqli_fetch_array($g)){
                            echo '<tr>
                                    <td>' . $r['ID'] . '</td>
                                    <td><span class="txt-dark">' . $r['lname'] . '</span></td>
                                    <td><span class="txt-dark">' . $r['fname'] . '</span></td>
                                    <td><span class="txt-dark">' . $r['address'] . ' ' . $r['address2'] . '</span></td>
                                    <td><span class="txt-dark">' . $r['city'] . '</span></td>
                                    <td><span class="txt-dark">' . $r['zip'] . '</span></td>
                                    
																		<td><span class="txt-dark">';
																		
                                    //Zillow Plugin...
                                    include 'customers/zillow/zillow-plugin.php';
																		
															echo '</span></td>
																		
                                    <td><span class="txt-dark">' . date("m/d/Y", strtotime($r['date'])) . '</span></td>
                                    <td><span class="txt-dark">' . $r['source'] . '</span></td>
                                    <td><span class="txt-dark">';
                              if($r['cust_type'] == 'New'){
                                echo 'Yes';
                              }else{
                                'No';
                              }
                              echo '</span></td>
                                    <td><span class="txt-dark">';
                                echo date("m/d/Y", strtotime($r['serviced_date']));
                              echo '</span></td>
																		<td><span class="txt-dark">';
                                echo date("m/d/Y", strtotime($r['invoiced_date']));
																echo '</td>';
														if($r['special_requests'] != ''){
															echo '<td style="background:yellow;border:2px solid black;color:black;font-weight:bold;">' . $r['special_requests'] . '</td>';
														}else{
															echo '<td></td>';
														}
																		
                                   echo '
                                    <td>
                                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#customerModal" onclick="load_form(\'Edit\',' . $r['ID'] . ');"><i class="fas fa-pencil-alt"></i> Edit</button>
                                      <button type="button" class="btn btn-danger btn-sm" onclick="remove_customer(' . $r['ID'] . ',this);"><i class="fas fa-trash"></i> Cancel</button>
                                    </td>
                                  </tr>';
                          }
													?>
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>
				</div>