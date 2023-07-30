@extends('layout.app')
@section('title')
{{ $detail->informasi_title }}
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user/styles/course.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets_user/styles/course_responsive.css') }}">
<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a href="courses.html">Berita</a></li>
								<li>{{ $detail->informasi_title }}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">

					<div class="course_container">
						<div class="course_title">{{ ucwords( $detail->informasi_title) }}</div>

						<!-- Course Image -->
						<div class="course_image"><img src="{{ asset('gambar/'.$detail->informasi_gambar) }}" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							{{-- <div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">description</div>
								<div class="tab">curriculum</div>
								<div class="tab">reviews</div>
							</div> --}}
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									{{-- <div class="tab_panel_title">{{ $detail->informasi_title }}</div> --}}
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>
                                                {!! $detail->informasi_deskripsi !!}
                                            </p>
                                            <br>
                                            <br>
                                            @if ($detail->informasi_lampiran != null)
                                            <h3>Lampiran</h3>
                                            <iframe src="{{ asset('lampiran/'.$detail->informasi_lampiran) }}" frameborder="0" style="width: 100%; height: 700px;"></iframe>
                                            @endif
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Informasi Terbaru</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
                                @foreach($informasi as $data)
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="{{ asset('gambar/'.$data->informasi_gambar) }}" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="{{ route('detail_informasi',$data->informasi_slug) }}">{{ ucwords($data->informasi_title) }}</a></div>
										<div class="latest_price">{{ date('d F Y', strtotime($data->created_at)) }}</div>
									</div>
								</div>
                                @endforeach

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

    @endsection

