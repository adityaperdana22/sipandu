@extends('layout.app')
@section('title')
Sisfo Penduduk
@endsection
@section('content')

<!-- Home -->
<div class="home">
    <div class="home_slider_container">
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">
            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background"
                style="background-image:url( {{ asset('frontend/kantor-lurah.jpg') }} )"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                {{-- <div class="home_slider_title" style="color:white; font-size:20px;">
                                    {{ $data->sub_judul_slider }}</div>
                            <div class="home_slider_subtitle" style="color:white;">{{ $data->judul_slider }}</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>

<!-- Popular Courses -->
<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('assets_user/images/courses_background.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Informasi Terbaru</h2>
                    <div class="section_subtitle">
                    </div>
                </div>
            </div>
        </div>
        <div class="row courses_row">
            <!-- Course -->
            @foreach ($informasi as $data)
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="{{ asset('gambar/'.$data->informasi_gambar) }}" alt="" style="width: 100%; height: 400px;"></div>
                    <div class="course_body">
                        <h3 class="course_title">
                            <a href="{{ route('detail_informasi', $data->informasi_slug) }}">{{ ucwords( $data->informasi_title ) }}</a>
                        </h3>
                        <div class="course_teacher text-danger"><small>{{ strtoupper($data->category_nama) }}</small></div>
                        <div class="course_text">
                            <p>{!! \Str::limit($data->informasi_deskripsi, 100) !!}</p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span>{{ date('d F Y', strtotime($data->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="">view all courses</a></div>
            </div>
        </div> --}}
    </div>
</div>

<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets_user') }}/images/team_background.jpg" data-speed="0.8"></div>
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
<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" style="background-color:#FF5B00;"
        data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start"
                    sty>
                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">Daftar Sekarang Juga!</div>
                        <div class="newsletter_subtitle">
                            {{-- Subcribe to lastest smartphones news & great deals we offer --}}
                        </div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form"
                            class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            {{-- <input type="email" class="newsletter_input" placeholder="Your Email" required="required"> --}}
                            <a href="https://api.whatsapp.com/send?phone=" type="submit"
                                class="btn btn-light btn-lg" style="color:#FF5B00; font-family: inherit;">Daftar
                                Sekarang</a>
                        </form>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
