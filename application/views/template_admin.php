<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MY_cms</title>
	<!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page<?= site_url('assets/skydash/')?> -->
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= site_url('assets/skydash/')?>js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= site_url('assets/skydash/')?>images/logoc.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand brand-logo mr-5" href="<?= site_url('admin/home/')?>"><img src="<?= site_url('assets/skydash/')?>images/cmslogo.png" style="width:50%;height:8%;" class="mr-2" alt="logo" /></a>
				<a class="navbar-brand brand-logo-mini" href="<?= site_url('admin/home/')?>"><img src="<?= site_url('assets/skydash/')?>images/cmslogo.png" style="width: 120%;height:8%;" alt="logo" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="icon-menu"></span>
				</button>
				<ul class="navbar-nav mr-lg-2">
					<li class="nav-item nav-search d-none d-lg-block">
						<div class="input-group">
							<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
								<span class="input-group-text" id="search">
									<i class="icon-search"></i>
								</span>
							</div>
							<input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
								aria-label="search" aria-describedby="search">
						</div>
					</li>
				</ul>	
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?= site_url('assets/skydash/')?>images/komi.png">
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
							<div class="d-flex ">
								<div class="flex-shrink-0 ml-3 mb-2">
									<img src="<?= site_url('assets/skydash/')?>images/komi.png">
								</div>
								<div class="flex-grow-1">
									<span class="fw-semibold d-block ml-3"><?= $this->session->userdata('nama')?></span>
									<small class="text-muted ml-3"><?= $this->session->userdata('level')?></small>
								</div>
							</div>
							<a class="dropdown-item" href="<?= base_url('auth/logout')?>" onClick="return confirm('Apakah Anda Yakin?')">
								<i class="ti-power-off text-primary"></i>Logout
							</a>	
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-toggle="offcanvas">
					<span class="icon-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/home')?>">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/caraousel')?>" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Caraousel</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/kategori')?>" aria-expanded="false"
							aria-controls="form-elements">
							<i class="icon-columns menu-icon"></i>
							<span class="menu-title">Kategori Konten</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/konten')?>" aria-expanded="false"
							aria-controls="charts">
							<i class="icon-bar-graph menu-icon"></i>
							<span class="menu-title">konten</span>
						</a>
					</li>
					<?php if($this->session->userdata('level')=='Admin'){?>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('admin/user')?>" aria-expanded="false"
								aria-controls="charts">
								<i class="icon-head menu-icon"></i>
								<span class="menu-title">User</span>
							</a>
						</li>   
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('admin/konfigurasi')?>" aria-expanded="false"
								aria-controls="icons">
								<i class="icon-contract menu-icon"></i>
								<span class="menu-title">Konfigurasi</span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</nav>
			<div class="main-panel">
        		<div class="content-wrapper">
                    <?= $contents;?>
        		</div>
				<footer class="footer">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><?= $this->session->userdata('nama')?>
                            <a><span style="color:blue	;">I am Atomic </span></a> from Bootstrap</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Design By Nightmare
							<i class="ti-heart text-danger ml-1"></i></span>
					</div>
					<div class="d-sm-flex justify-content-center justify-content-sm-between"> 	
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
								href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
					</div>
				</footer>
			</div>
		</div>
	</div>

	<!-- plugins:js -->
	<script src="<?= site_url('assets/skydash/')?>vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?= site_url('assets/skydash/')?>vendors/chart.js/Chart.min.js"></script>
	<script src="<?= site_url('assets/skydash/')?>vendors/datatables.net/jquery.dataTables.js"></script>
	<script src="<?= site_url('assets/skydash/')?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/dataTables.select.min.js"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= site_url('assets/skydash/')?>js/off-canvas.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/hoverable-collapse.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/template.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/settings.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/todolist.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?= site_url('assets/skydash/')?>js/dashboard.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/Chart.roundedBarCharts.js"></script>
	<!-- End custom js for this page-->
	<script>
		$('#hilang').delay('slow').slideDown('slow').delay(2500).slideUp(500);
	</script>
</body>
</html>
