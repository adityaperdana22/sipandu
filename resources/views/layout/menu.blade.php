<header class="header">
    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <ul class="top_bar_contact_list">
                                <li>
                                    <div class="question">Have any questions?</div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div>+6283176021892</div>
                                </li>
                                {{-- <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <div>adityapr902@gmail.com</div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="{{ route('home') }}">
                                <div class="logo_text"><img src="{{ asset('images/logo.jpeg') }}" width="28px" alt=""></div>
                                <div class="logo_text" style="font-size:30px;">Sisfo<span> Penduduk</span></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li class="{{ Route::is('home') ? 'active': '' }}"><a href="{{ route('home') }}">Home</a></li>
                                <li class="{{ Route::is('about') ? 'active': '' }}"><a href="{{ route('about') }}">About</a></li>
                                <li class="{{ Route::is('kontak') ? 'active': '' }}"><a href="{{ route('kontak') }}">Kontak</a></li>
                                <li class="{{ Route::is('login') ? 'active': '' }}"><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                            {{-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> --}}

                            <!-- Hamburger -->

                            {{-- <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div> --}}
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
