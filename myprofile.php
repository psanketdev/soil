<?php 
	include('header.php');
?>


<div>
    <!-- <div id="wrapper">
			<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
					<div class="container-fluid d-flex flex-column p-0">
							<hr class="sidebar-divider my-0">
							<ul class="nav navbar-nav text-light" id="accordionSidebar">
									<li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
							</ul>
							<div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
					</div>
			</nav>
    </div> -->
</div>

<section class="myprofile">
		<div class="container mt-5 pt-5">
			<div class="myprofile_details mb-5">
					<div class="myprofile_details_header d-flex">
							<div class="d-flex align-items-center">
								<i class="fa fa-user" aria-hidden="true"></i>
								<h5>Onkar Kumbar</h5>
							</div>
							<ul class="d-flex ml-auto">
									<!-- <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
											<div class="dropdown-menu dropdown-menu-right p-3 animated-grow-in" role="menu" aria-labelledby="searchDropdown">
													<form class="form-inline mr-auto navbar-search w-100">
															<div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
																	<div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fa fa-search"></i></button></div>
															</div>
													</form>
											</div>
									</li> -->
									<li class="nav-item dropdown no-arrow mx-1" role="presentation">
											<div class="nav-item dropdown no-arrow"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><span class="badge badge-danger badge-counter">3+</span><i class="fa fa-bell fa-fw"></i></button>
													<div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
															role="menu">
															<h6 class="dropdown-header">alerts center</h6>
															<a class="d-flex align-items-center dropdown-item" href="#">
																	<div class="mr-3">
																			<div class="bg-primary icon-circle"><i class="fa fa-file-alt text-white"></i></div>
																	</div>
																	<div><span class="small text-gray-500">December 12, 2019</span>
																			<p>A new monthly report is ready to download!</p>
																	</div>
															</a>
															<a class="d-flex align-items-center dropdown-item" href="#">
																	<div class="mr-3">
																			<div class="bg-success icon-circle"><i class="fa fa-donate text-white"></i></div>
																	</div>
																	<div><span class="small text-gray-500">December 7, 2019</span>
																			<p>$290.29 has been deposited into your account!</p>
																	</div>
															</a>
															<a class="d-flex align-items-center dropdown-item" href="#">
																	<div class="mr-3">
																			<div class="bg-warning icon-circle"><i class="fa fa-exclamation-triangle text-white"></i></div>
																	</div>
																	<div><span class="small text-gray-500">December 2, 2019</span>
																			<p>Spending Alert: We've noticed unusually high spending for your account.</p>
																	</div>
															</a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
											</div>
									</li>
									<li class="nav-item dropdown no-arrow mx-1" role="presentation">
											<div class="nav-item dropdown no-arrow"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></button>
													<div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
															role="menu">
															<h6 class="dropdown-header">alerts center</h6>
															<a class="d-flex align-items-center dropdown-item" href="#">
																	<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar4.jpeg">
																			<div class="bg-success status-indicator"></div>
																	</div>
																	<div>
																			<div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
																			<p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
																	</div>
															</a>
															<a class="d-flex align-items-center dropdown-item" href="#">
																	<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar2.jpeg">
																			<div class="status-indicator"></div>
																	</div>
																	<div>
																			<div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
																			<p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
																	</div>
															</a>
															<a class="d-flex align-items-center dropdown-item" href="#">
																	<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar3.jpeg">
																			<div class="bg-warning status-indicator"></div>
																	</div>
																	<div>
																			<div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
																			<p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
																	</div>
															</a>
															<a class="d-flex align-items-center dropdown-item" href="#">
																	<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="avatars/avatar5.jpeg">
																			<div class="bg-success status-indicator"></div>
																	</div>
																	<diva>
																			<div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
																			<p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
																	</div>
															</a>
															<!-- <a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div> -->
											</div>
											<div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
									</li>
									<div class="d-none d-sm-block topbar-divider"></div>
									<li class="nav-item dropdown no-arrow" role="presentation"></li>
							</ul>
					</div>
			</div>


			<div class="my_profile_tabs">
				<div class="row">
					<div class="col-xl-4">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
							<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
							<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
							<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="tab-content" id="v-pills-tabContent">
						<!--Home Tab-->
							<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
								<div class="myprofile_dashboard">
									<div class="d-sm-flex justify-content-between align-items-center mb-4">
										<h2 class="text-dark mb-0 font-weight-normal">Dashboard</h32
										<a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#">
										<i class="fa fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
									</div>

									<div class="row">
										<div class="col-lg-7 col-xl-8">
												<div class="card shadow mb-4">
														<div class="card-header d-flex justify-content-between align-items-center">
																<h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
																<div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-ellipsis-v text-gray-400"></i></button>
																		<div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
																				role="menu">
																				<p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
																				<div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
																</div>
														</div>
														<div class="card-body">
																<div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
														</div>
												</div>
										</div>
										<div class="col-lg-5 col-xl-4">
												<div class="card shadow mb-4">
														<div class="card-header d-flex justify-content-between align-items-center">
																<h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
																<div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-ellipsis-v text-gray-400"></i></button>
																		<div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
																				role="menu">
																				<p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
																				<div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
																</div>
														</div>
														<div class="card-body">
																<div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
																<div
																		class="text-center small mt-4"><span class="mr-2"><i class="fa fa-circle text-primary"></i>&nbsp;Direct</span><span class="mr-2"><i class="fa fa-circle text-success"></i>&nbsp;Social</span><span class="mr-2"><i class="fa fa-circle text-info"></i>&nbsp;Refferal</span></div>
												</div>
										</div>
										</div>
									</div>
									<div class="row">
									<div class="col-md-6 col-xl-3 mb-4">
											<div class="card shadow border-left-primary py-2">
													<div class="card-body">
															<div class="row align-items-center no-gutters">
																	<div class="col mr-2">
																			<div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Earnings (monthly)</span></div>
																			<div class="text-dark font-weight-bold h5 mb-0"><span>$40,000</span></div>
																	</div>
																	<div class="col-auto"><i class="fa fa-calendar fa-2x text-gray-300"></i></div>
															</div>
													</div>
											</div>
									</div>
									<div class="col-md-6 col-xl-3 mb-4">
											<div class="card shadow border-left-success py-2">
													<div class="card-body">
															<div class="row align-items-center no-gutters">
																	<div class="col mr-2">
																			<div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Earnings (annual)</span></div>
																			<div class="text-dark font-weight-bold h5 mb-0"><span>$215,000</span></div>
																	</div>
																	<div class="col-auto"><i class="fa fa-dollar-sign fa-2x text-gray-300"></i></div>
															</div>
													</div>
											</div>
									</div>
									<div class="col-md-6 col-xl-3 mb-4">
											<div class="card shadow border-left-info py-2">
													<div class="card-body">
															<div class="row align-items-center no-gutters">
																	<div class="col mr-2">
																			<div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Tasks</span></div>
																			<div class="row no-gutters align-items-center">
																					<div class="col-auto">
																							<div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>50%</span></div>
																					</div>
																					<div class="col">
																							<div class="progress progress-sm">
																									<div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
																							</div>
																					</div>
																			</div>
																	</div>
																	<div class="col-auto"><i class="fa fa-clipboard-list fa-2x text-gray-300"></i></div>
															</div>
													</div>
											</div>
									</div>
									<div class="col-md-6 col-xl-3 mb-4">
											<div class="card shadow border-left-warning py-2">
													<div class="card-body">
															<div class="row align-items-center no-gutters">
																	<div class="col mr-2">
																			<div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Pending Requests</span></div>
																			<div class="text-dark font-weight-bold h5 mb-0"><span>18</span></div>
																	</div>
																	<div class="col-auto"><i class="fa fa-comments fa-2x text-gray-300"></i></div>
															</div>
													</div>
											</div>
									</div>
									</div>	










								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								<form method="get" action="">
								<div class="form-row">
									<div class="form-group col-md-6">
									<label for="fname">First Name</label>
										<input type="text" id="fname" class="form-control" placeholder="First name">
									</div>
									<div class="form-group col-md-6">
									<label for="lname">Last Name</label>
										<input type="text" id="lname" class="form-control" placeholder="Last name">
									</div>
  							</div>


								<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
								</form>
							
							
							
							</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
</section>
<?php 
    include('footer.php');
?>






