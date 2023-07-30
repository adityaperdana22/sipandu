<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/logo.jpeg') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_user/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('assets_user/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_user/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_user/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_user/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link href="{{ asset('assets_user/plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_user/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_user/styles/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/floating-wpp.min.css') }}">
</head>

<body>

    <div class="super_container">
        <!-- Header -->
        @include('layout.menu')
        @include('layout.menu_mobile')
        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_background"
                style="background-image:url({{ asset('assets_user/images/footer_background.png') }})"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-4 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">Sisfo<span> Penduduk</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Sisfo Penduduk</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href=""><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href=""><i
                                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href=""><i
                                                            class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

								<div class="col-lg-4 footer_col">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_links">
                                        <div class="footer_title">Quick Link</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="{{ route('home') }}">Home</a></li>
											    <li><a href="{{ route('about') }}">About</a></li>
											    <li><a href="{{ route('kontak') }}">Contact</a></li>
										    </ul>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Whatsapp: +628xx</li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                {{-- <div class="col-lg-3 footer_col clearfix">

<!-- Footer links -->
<div class="footer_section footer_mobile">
    <div class="footer_title">Mobile</div>
    <div class="footer_mobile_content">
        <div class="footer_image"><a href="#"><img
                    src="{{ asset('assets_user/images/mobile_1.png') }}" alt=""></a>
        </div>
        <div class="footer_image"><a href="#"><img
                    src="{{ asset('assets_user/images/mobile_2.png') }}" alt=""></a>
        </div>
    </div>
</div>

</div> --}}

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy; Aditya Perdana <script>
                                    document.write(new Date().getFullYear());

                                </script> | All rights reserved
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

                            <div id="myDiv"></div>

    <script src="{{ asset('assets_user/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets_user/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets_user/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('assets_user/js/custom.js') }}"></script>
    <script src="{{ asset('assets_user/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('assets_user/js/about.js') }}"></script>

    <script src="{{ asset('assets_user/js/floating-wpp.min.js') }}"></script>
    <script type="text/javascript">
        $('#myDiv').floatingWhatsApp({
            phone: '083176021892',
            popupMessage: 'Hello, ada yang bisa kami bantu?',
            showPopup: true,
            size: '55px'
        });

    </script>

</body>

</html>
