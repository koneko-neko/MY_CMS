	<!DOCTYPE html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>MY_cms</title>
		<!-- plugins:css -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
			<div class="container-fluid page-body-wrapper full-page-wrapper">
				<div class="content-wrapper d-flex align-items-center auth px-0">
					<div class="row w-100 mx-0">
						<div class="col-lg-4 mx-auto">
							<div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background-color:#F0F0F0;">
								<h4 class="text-center" style="color:blue; font-family:cursive">FORM LOGIN</h4>
								<div class="brand-logo text-center">
									<img src="<?= site_url('assets/skydash/')?>/images/cmslogo.png" style="width:40%;" alt="logo">
								</div>
								<form class="pt-3" action="<?= base_url('auth/login')?>" method="POST">
									<div class="form-group">
										<input type="text" class="form-control form-control-lg" placeholder="Username" name="username" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required>
									</div>
									<div class="mt-3">
										<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
									</div><hr>
									<div id="hilang">
										<?= $this->session->flashdata('alert')?>
									</div>
								</form>									
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- page-body-wrapper ends -->
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
