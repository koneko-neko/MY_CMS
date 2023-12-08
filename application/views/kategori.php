<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title  -->
	<title>CMS | SAYA</title>

	<!-- Favicon  -->
	<link rel="icon" href="<?= site_url('assets/world/')?>img/favicon.png">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= site_url('assets/world/')?>style.css">

</head>
<body>
	<!-- Preloader Start -->
	<div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->
	<!-- ***** Header Area Start ***** -->
	<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg">
						<!-- Logo -->
						<a href="<?= base_url()?>" class="mb-0 h3" style="color:#7D7C7C;"><?= $konfig->judul_website;?></a>
						<!-- Navbar Toggler -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
							aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span
								class="navbar-toggler-icon"></span></button>
						<!-- Navbar -->
						<div class="collapse navbar-collapse" id="worldNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" style="color:#7D7C7C;" href="<?= base_url()?>">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#7D7C7C;">Konten</a>			
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<?php foreach( $kategori as $kat){ ?>
										<a class="dropdown-item" href="<?= base_url('home/kategori/'. $kat['id_kategori'])?>"><?= $kat['nama_kategori']?></a>
									<?php } ?>
									</div>
								</li>
								<li class="nav-item">
									<a style="color:#7D7C7C;" class="nav-link" href="#">About</a>
								</li>
                                <li class="nav-item active">
									<a class="nav-link" style="color:#7D7C7C;" href="<?= base_url('auth')?>">Login</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<div class="main-content-wrapper section-padding-100">
		<div class="container">
			<div class="row justify-content-center">
				<!-- ============= Post Content Area Start ============= -->
				<div class="col-12 col-lg-12">
					<div class="post-content-area mb-50">
						<!-- Catagory Area -->
						<!-- Catagory Area -->
						<div class="world-catagory-area mt-50">
							<ul class="nav nav-tabs" id="myTab2" role="tablist">
								<li class="title">Daftar Konten <?= $nama_kategori;?></li>
							</ul>
							<div class="tab-content" id="myTabContent2">
								<div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
									<div class="row">
										<?php foreach($konten as $po){ ?>
										<div class="col-12 col-md-6 mb-3">
											<div class="single-blog-post wow fadeInUpBig">
												<div class="post-thumbnail">
                                                    <img src="<?= base_url('assets/upload/konten/' . $po['foto'])?>" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#"><?= $po['nama_kategori']?></a></div>
                                                </div>
												<div class="post-content">
													<a href="<?= base_url('home/artikel/'. $po['slug'])?>" class="headline">
														<h5><?= $po['judul']?></h5>
													</a>
													<div class="post-meta">
														<p class="post-author">By <?= $po['username']?></p>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
	</div>
	<!-- ***** Footer Area Start ***** -->
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="footer-single-widget">
						<ul class="footer-menu">
							<li style="color:white;">Email
							</li>
							<p><?= $konfig->email;?></p>
						</ul>
						<ul class="footer-menu">
							<li style="color:white;">Alamat
							</li>
							<p><?= $konfig->alamat;?></p>
						</ul>
						<ul class="footer-menu">
							<li style="color:white;">Whatsapp
							</li>
							<p><?= $konfig->no_wa;?></p>
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<h5 style="color:white;" class="mb-4">Menu</h5>
					<div class="footer-single-widget">
						<ul class="footer-menu mb-3">
							<a href="<?= base_url()?>">
								<li>Home</li>
							</a>
						</ul>
						<ul class="footer-menu mb-4">
							<a href="">
								<li>About</li>
							</a>
						</ul>
						<ul class="footer-menu mb-4">
							<a href="<?= base_url('auth')?>">
								<li>Login</li>
							</a>
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="footer-single-widget">
						<h5>Akhir Halaman</h5>
						<div class="copywrite-text">
							<h5 style="color: white;"><?= $konfig->judul_website;?></h5>
							<p>
								</script>Website <?= $konfig->judul_website;?> I Am Atomic
								<p>Proudly distributed by <a href="https://themewagon.com"
										target="_blank">ThemeWagon</a></p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Footer Area End ***** -->

	<!-- jQuery (Necessary for All JavaScript Plugins) -->
	<script src="<?= site_url('assets/world/')?>js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="<?= site_url('assets/world/')?>js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="<?= site_url('assets/world/')?>js/bootstrap.min.js"></script>
	<!-- Plugins js -->
	<script src="<?= site_url('assets/world/')?>js/plugins.js"></script>
	<!-- Active js -->
	<script src="<?= site_url('assets/world/')?>js/active.js"></script>

</body>

</html>
