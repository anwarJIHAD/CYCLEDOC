<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
	data-assets-path="<?= base_url('assets/template/') ?>assets/" data-template="horizontal-menu-template">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>CycleDoc -HEART RATE AND PM2.5 ANALYST SYSTEM FOR CYCLIST </title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/template/') ?>assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet" />

	<!-- Icons -->
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css' rel='stylesheet' />
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/vendor/fonts/boxicons.css" />
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/vendor/fonts/fontawesome.css" />
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/vendor/fonts/flag-icons.css" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/vendor/css/rtl/core.css"
		class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/vendor/css/rtl/theme-default.css"
		class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/demo.css" />

	<!-- Vendors CSS -->
	<link rel="stylesheet"
		href="<?= base_url('assets/template/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/vendor/libs/typeahead-js/typeahead.css" />
	<link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/vendor/libs/apex-charts/apex-charts.css" />

	<!-- Page CSS -->
	<style>
		#map {
			height: 250px;
			width: 100%;
		}
	</style>
	<!-- Helpers -->
	<script src="<?= base_url('assets/template/') ?>assets/vendor/js/helpers.js"></script>

	<!-- <script src="<?= base_url('assets/template/') ?>assets/vendor/js/template-customizer.js"></script> -->
	<script src="<?= base_url('assets/template/') ?>assets/js/config.js"></script>
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
		<div class="layout-container">
			<!-- Navbar -->

			<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
				<div class="container-xxl">
					<div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
						<a href="index.html" class="app-brand-link gap-2">
							<span class="app-brand-logo demo">
								<svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink">
									<defs>
										<path
											d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
											id="path-1"></path>
										<path
											d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
											id="path-3"></path>
										<path
											d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
											id="path-4"></path>
										<path
											d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
											id="path-5"></path>
									</defs>
									<g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
											<g id="Icon" transform="translate(27.000000, 15.000000)">
												<g id="Mask" transform="translate(0.000000, 8.000000)">
													<mask id="mask-2" fill="white">
														<use xlink:href="#path-1"></use>
													</mask>
													<use fill="#696cff" xlink:href="#path-1"></use>
													<g id="Path-3" mask="url(#mask-2)">
														<use fill="#696cff" xlink:href="#path-3"></use>
														<use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3">
														</use>
													</g>
													<g id="Path-4" mask="url(#mask-2)">
														<use fill="#696cff" xlink:href="#path-4"></use>
														<use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4">
														</use>
													</g>
												</g>
												<g id="Triangle"
													transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
													<use fill="#696cff" xlink:href="#path-5"></use>
													<use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
												</g>
											</g>
										</g>
									</g>
								</svg>
							</span>
							<span class="app-brand-text demo menu-text fw-bold">CycleDoc</span>
						</a>

						<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
							<i class="bx bx-chevron-left bx-sm align-middle"></i>
						</a>
					</div>

					<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
						<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
							<i class="bx bx-menu bx-sm"></i>
						</a>
					</div>

					<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
						<ul class="navbar-nav flex-row align-items-center ms-auto">
							<a href="<?= base_url('Auth') ?>"> <button
									class="btn btn-primary btn-submit">Login</button></a>

						</ul>
					</div>

					<!-- Search Small Screens -->
					<div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
						<input type="text" class="form-control search-input border-0" placeholder="Search..."
							aria-label="Search..." />
						<i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
					</div>
				</div>
			</nav>

			<!-- / Navbar -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Menu -->
					<aside id="layout-menu"
						class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
						<div class="container-xxl d-flex h-100">
							<ul class="menu-inner">
								<!-- Dashboards -->
								<li class="menu-item active">
									<a href="dashboards-analytics.html" class="menu-link">
										<i class="menu-icon tf-icons bx bx-pie-chart-alt-2"></i>
										<div data-i18n="Analytics">Dashboard</div>
									</a>
								</li>

								<!-- Misc -->

								<li class="menu-item">
									<a href="https://themeselection.com/support/" target="_blank" class="menu-link">
										<i class="menu-icon tf-icons bx bx-support"></i>
										<div data-i18n="Support">Support</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
										target="_blank" class="menu-link">
										<i class="menu-icon tf-icons bx bx-file"></i>
										<div data-i18n="Documentation">Documentation</div>
									</a>
								</li>
							</ul>
						</div>
					</aside>
					<!-- / Menu -->

					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<div class="col-lg- mb-4 order-0">
								<div class="card">
									<div class="d-flex align-items-end row">
										<div class="col-sm-7">
											<div class="card-body">
												<h5 class="card-title text-primary">Selamat Datang 🎉 Di Landing Page</h5>
												<!-- <p class="mb-4">
													Sistem Informasi Keadaan Udara <span class="fw-medium">72%</span>
												
												</p> -->

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
						</div>
						<!-- <div class="row">
							<div class="col-12">
								<div class="card mb-4">
									<h5 class="card-header">Keadaan Udara</h5>
									<div class="card-body">
										<div class="leaflet-map" id="map"></div>
									</div>
								</div>
							</div>
						</div> -->
<!-- 						
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
						</div> -->


					</div>
					<!--/ Content -->

					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
						<div
							class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
							<div class="mb-2 mb-md-0">
								©
								<script>
									document.write(new Date().getFullYear());
								</script>
								, made with ❤️ by Team PCR

							</div>

						</div>
					</footer>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!--/ Content wrapper -->
			</div>

			<!--/ Layout container -->
		</div>
	</div>

	<!-- Overlay -->
	<div class="layout-overlay layout-menu-toggle"></div>

	<!-- Drag Target Area To SlideIn Menu On Small Screens -->
	<div class="drag-target"></div>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/jquery/jquery.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/popper/popper.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/js/bootstrap.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/hammer/hammer.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/i18n/i18n.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/js/menu.js"></script>

	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/vendor/libs/chartjs/chartjs.js"></script>

	<!-- Main JS -->
	<script src="<?= base_url('assets/template/') ?>assets/js/main.js"></script>

	<!-- Page JS -->
	<script src="<?= base_url('assets/template/') ?>assets/js/dashboards-analytics.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/js/app-ecommerce-dashboard.js"></script>
	<script src="<?= base_url('assets/template/') ?>assets/js/charts-chartjs.js"></script>
	<!-- <script src="<?= base_url('assets/template/') ?>assets/js/maps-leaflet.js"></script> -->



	<script>
		mapboxgl.accessToken = 'pk.eyJ1Ijoiam9jaG9pMDcwNyIsImEiOiJjajczMWZrcTkwNHo2MzNvNGIzOHI3MW85In0.GSHlVF_HltDmEvomI2m_CA';
		var map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/mapbox/streets-v11',
			center: [106.816666, -6.200000], // Koordinat pusat di Indonesia (Jakarta)
			zoom: 12
		});
	</script>

</body>

</html>
