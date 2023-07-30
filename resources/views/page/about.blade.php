<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user') }}/styles/bootstrap4/bootstrap.min.css">
<link href="{{ asset('assets_user') }}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('assets_user') }}/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user') }}/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user') }}/styles/about.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user') }}/styles/about_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

    @include('layout.menu')

	<!-- Menu -->

    @include('layout.menu_mobile')

	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="{{ route('home') }}">Home</a></li>
								<li>About</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Selamat Datang di Sistem Informasi Kependudukan Kelurahan Gurun Laweh Nan XX</h2>
						<div class="section_subtitle"><p>Gurun Laweh Nan XX, Lubuk Begalung, Padang City, West Sumatra 25144, Indonesia</p></div>
					</div>
				</div>
			</div>
			<div class="row about_row">

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><img src="{{ asset('assets_user') }}/images/about_1.jpg" alt=""></div>
						<div class="about_item_title"><a href="#">Our Stories</a></div>
						<div class="about_item_text">
							<p>Dokumentasi Kelurahan Gurun Laweh Nan XX.</p>
						</div>
					</div>
				</div>

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_middle">
					<div class="about_item">
						<div class="about_item_image"><img src="{{ asset('assets_user') }}/images/about_2.jpg" alt=""></div>
						<div class="about_item_title"><a href="#">Our Mission</a></div>
						<div class="about_item_text">
							<p>1.Memberikan pelayanan administrasi pemerintahan, pembangunan dan sosial kemasyarakatan secara cepat, akurat dan transparan, koordinatif dan akuntabel.
2.Melaksanakan pelimpahan tugas dan wewenang dari Walikota dalam penyelenggaran tugas umum pemerintahan secara baik, profesional dan akuntabilitas untuk mendorong terciptanya kesejahteraan masyarakat dalam suasana religious dan berbudaya.
3.Menciptakan ketentraman dan ketertiban umum melalui peningkatan koordinasi dengan penegakkan peraturan dan perundang-undangan.
							</p>
						</div>
					</div>
				</div>

				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_right">
					<div class="about_item">
						<div class="about_item_image"><img src="{{ asset('assets_user') }}/images/about_3.jpg" alt=""></div>
						<div class="about_item_title"><a href="#">Our Vision</a></div>
						<div class="about_item_text">
							<p>Menjadi Kelurahan Terbaik dalam Melayani Masyarakat untuk Mendorong Terciptanya Masyarakat yang Sejahtera, Religius dan Berbudaya.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Feature -->

	<div class="feature">
		<div class="feature_background" style="background-image:url({{ asset('assets_user') }}/images/courses_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Sejarah Singkat</h2>
						<div class="section_subtitle"><p>Tentang Kelurahan Gurun Laweh Nan XX</p></div>
					</div>
				</div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				<div class="col-lg-6 feature_col">
					<div class="feature_content">
						<!-- Accordions -->
						<div class="accordions">

							<div class="elements_accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Wilayah Gurun Laweh Nan XX</div></div>
									<div class="accordion_panel">
										<p>Gurun Laweh Nan XX adalah salah satu kelurahan di Kecamatan Lubuk Begalung, Padang, Sumatra Barat, Indonesia. Luas kelurahan: 1,03 kilometer persegi</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Data Penduduk</div></div>
									<div class="accordion_panel">
										<p>Kelurahan Gurun Lawas Nan XX berpenduduk 5857 jiwa (2017) terdiri dari 2971 laki-laki dan 2886 perempuan.

Fasilitas Pendidikan
Taman Kanan Kanak : 1 Unit
Sekolah Dasar : 2 Unit

Fasilitas Agama
Masjid : 2 Unit
Mushala : 7 Unit</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Kode Wilayah</div></div>
									<div class="accordion_panel">
										<p>Gurun Laweh Nan XX mempunyai kode wilayah menurut kemendagri 13.71.06.1006. Sedangkan kodeposnya adalah 25221</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Sejarah Umum Kota Padang</div></div>
									<div class="accordion_panel">
										<p>Sebagai sejarah umum, Kota Padang memiliki sejarah panjang sebagai salah satu pusat perdagangan dan permukiman di Pulau Sumatera. Wilayah ini pernah menjadi bagian dari Kerajaan Pagaruyung pada abad ke-14 hingga abad ke-19. Pada masa kolonial Belanda, Padang menjadi salah satu kota pelabuhan penting di pesisir barat Sumatera.</p>
									</div>
								</div>

							</div>

						</div>
						<!-- Accordions End -->
					</div>
				</div>

				<!-- Feature Video -->
				<div class="col-lg-6 feature_col">
					<div class="feature_video d-flex flex-column align-items-center justify-content-center">
					<div class="feature_video_background" style="background-image:url({{ asset('assets_user') }}/images/vid1.png)"></div>
						<a class="vimeo feature_video_button" link href="https://www.youtube.com/embed/SDb9E0xAB8Y">
							<img src="{{ asset('assets_user') }}/images/play.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Staff Kelurahan</h2>
						<div class="section_subtitle"><p>Kelurahan Gurun Laweh Nan XX</p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="{{ asset('assets_user') }}/images/team_1.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Windy Elsy Dinasti</a></div>
							<div class="team_subtitle">Bendahara</div>
							<div class="social_list">
								<ul>
									<!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="{{ asset('assets_user') }}/images/team_2.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Aditya Perdana Rizal</a></div>
							<div class="team_subtitle">Admin</div>
							<div class="social_list">
								<ul>
									<!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="{{ asset('assets_user') }}/images/team_3.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Zikri Wahyudi</a></div>
							<div class="team_subtitle">Kurir</div>
							<div class="social_list">
								<ul>
									<!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="{{ asset('assets_user') }}/images/team_4.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Reza Aulia Rahman</a></div>
							<div class="team_subtitle">Sekretaris</div>
							<div class="social_list">
								<ul>
									<!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image	:url({{ asset('assets_user') }}/images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">

								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Unic<span>at</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Sistem Informasi Kependudukan Kelurahan Gurun Laweh Nan XX.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: GurunLaweh@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>Gurun Laweh</li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col">

								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="{{ route('home') }}">Home</a></li>
											<li><a href="{{ route('about') }}">About</a></li>
											<li><a href="{{ route('kontak') }}">Contact</a></li>
											
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-3 footer_col clearfix">

								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="{{ asset('assets_user') }}/images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="{{ asset('assets_user') }}/images/mobile_2.png" alt=""></a></div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{ asset('assets_user') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('assets_user') }}/styles/bootstrap4/popper.js"></script>
<script src="{{ asset('assets_user') }}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{ asset('assets_user') }}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset('assets_user') }}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset('assets_user') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset('assets_user') }}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset('assets_user') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ asset('assets_user') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ asset('assets_user') }}/plugins/easing/easing.js"></script>
<script src="{{ asset('assets_user') }}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{ asset('assets_user') }}/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="{{ asset('assets_user') }}/js/about.js"></script>
</body>
</html>
