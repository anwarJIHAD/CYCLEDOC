
					<div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="py-3 mb-4"><span class="text-muted fw-light"></span> Dashboard</h4>

						<!-- Card Border Shadow -->
						<div class="row">
							<div class="col-sm-6 col-lg-3 mb-4">
								<div class="card card-border-shadow-primary h-100">
									<div class="card-body">
										<div class="d-flex align-items-center mb-2 pb-1">
											<div class="avatar me-2">
												<span class="avatar-initial rounded bg-label-primary"><i
														class="bx bxs-truck"></i></span>
											</div>
											<h5 class="ms-1 mb-0">PM 2.5</h5>
										</div>
										<div class="d-flex justify-content-center">
											<h2 class="mb-0">25</h2>
										</div>

									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4">
								<div class="card card-border-shadow-warning h-100">
									<div class="card-body">
										<div class="d-flex align-items-center mb-2 pb-1">
											<div class="avatar me-2">
												<span class="avatar-initial rounded bg-label-warning"><i
														class="bx bx-error"></i></span>
											</div>
											<h5 class="ms-1 mb-0">Heart Rate</h5>
										</div>
										<div class="d-flex justify-content-center">
											<h2 class="mb-0">25</h2>
											<small class="text-muted">BPM</small>

										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4">
								<div class="card card-border-shadow-danger h-100">
									<div class="card-body">
										<div class="d-flex align-items-center mb-2 pb-1">
											<div class="avatar me-2">
												<span class="avatar-initial rounded bg-label-danger"><i
														class="bx bx-git-repo-forked"></i></span>
											</div>
											<h5 class="ms-1 mb-0">Speed</h5>
										</div>
										<div class="d-flex justify-content-center">
											<h2 class="mb-0">17</h2>
											<small class="text-muted">Km/h</small>

										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4">
								<div class="card card-border-shadow-info h-100">
									<div class="card-body">
										<div class="d-flex align-items-center mb-2 pb-1">
											<div class="avatar me-2">
												<span class="avatar-initial rounded bg-label-info"><i
														class="bx bx-time-five"></i></span>
											</div>
											<h5 class="ms-1 mb-0">
												Distance</h5>
										</div>
										<div class="d-flex justify-content-center">
											<h2 class="mb-0">80</h2>
											<small class="text-muted">Km</small>

										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4">
								<div class="card card-border-shadow-info h-100">
									<div class="card-body">
										<div class="d-flex align-items-center mb-2 pb-1">
											<div class="avatar me-2">
												<span class="avatar-initial rounded bg-label-info"><i
														class="bx bx-time-five"></i></span>
											</div>
											<h5 class="ms-1 mb-0">
												Time</h5>
										</div>
										<div class="d-flex justify-content-center">
											<h2 class="mb-0">01.28.38</h2>
											<small class="text-muted">Second</small>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/ Card Border Shadow -->
						<!-- <div class="row">
							<div class="col-lg- mb-4 order-0">
								<div class="card">
									<div class="d-flex align-items-end row">
										<div class="col-sm-7">
											<div class="card-body">
												<h5 class="card-title text-primary">Selamat Datang 🎉</h5>
												<p class="mb-4">
													Sistem Informasi Keadaan Udara <span class="fw-medium">72%</span>

												</p>

											</div>
										</div>
										<div class="col-sm-5 text-center text-sm-left">
											<div class="card-body pb-0 px-0 px-md-4">
												<img src="<?= base_url('assets/template/') ?>assets/img/illustrations/man-with-laptop-light.png"
													height="140" alt="View Badge User"
													data-app-dark-img="illustrations/man-with-laptop-dark.png"
													data-app-light-img="illustrations/man-with-laptop-light.png" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<div class="row">
							<div class="col-12">
								<div class="card mb-4">
									<h5 class="card-header">Maps</h5>
									<div class="card-body">
										<div class="leaflet-map" id="map"></div>

										<!-- <div class="" id="mapdashboard"></div> -->

									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-8 mb-4">
								<div class="card">
									<div class="row row-bordered g-0">
										<div class="col-md-12">
											<div class="card-header">
												<h5 class="card-title mb-0">Rata Rata Perbulan</h5>
												<small class="card-subtitle">Yearly report overview</small>
												<div class="dropdown">
													<div class="input-group">
														<select style="width:20%;" id="search_transaksipelapak"
															name="keyword" class="form-control"
															value="<?= set_value('keyword'); ?>">
															<option class='text-center dropdown-toggle' value="">Semua
															</option>
															<?php foreach ($tahun as $p): ?>
																<option value="<?= $p; ?>">
																	<?= $p; ?>
																</option>
															<?php endforeach; ?>>

														</select>
													</div>

												</div>
											</div>
											<div class="card-body">
												<div id="totalIncomeChart1"></div>
											</div>
										</div>
									</div>
								</div>
								<!--/ Total Income -->
							</div>
							<div class="col-xl-4 col-lg-4 col-12 mb-4">
								<div class="card">
									<div class="card-header header-elements">
										<h5 class="card-title mb-0">Rata Rata Harian</h5>
										<div class="card-action-element ms-auto py-0">
											<div class="dropdown">
												<button type="button" class="btn dropdown-toggle px-0"
													data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bx bx-calendar"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-end">
													<li>
														<a href="javascript:void(0);"
															class="dropdown-item d-flex align-items-center">Today</a>
													</li>
													<li>
														<a href="javascript:void(0);"
															class="dropdown-item d-flex align-items-center">Yesterday</a>
													</li>
													<li>
														<a href="javascript:void(0);"
															class="dropdown-item d-flex align-items-center">Last 7
															Days</a>
													</li>
													<li>
														<a href="javascript:void(0);"
															class="dropdown-item d-flex align-items-center">Last 30
															Days</a>
													</li>
													<li>
														<hr class="dropdown-divider" />
													</li>
													<li>
														<a href="javascript:void(0);"
															class="dropdown-item d-flex align-items-center">Current
															Month</a>
													</li>
													<li>
														<a href="javascript:void(0);"
															class="dropdown-item d-flex align-items-center">Last
															Month</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<canvas id="barChart" class="chartjs" data-height="270"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--/ On route vehicles Table -->
					</div>
					<!-- / Content -->
