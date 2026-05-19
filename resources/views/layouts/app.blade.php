<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Oceano Apex')</title>

    @yield('meta')

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
</head>

<body>

    {{-- HEADER --}}
    <header id="header" class="has-navbar-top has-navbar-bottom">


        <!-- Top Bar -->
        <nav class="navbar navbar-expand top">
            <div class="container header">


                <!-- Top Bar [left] -->

                <ul class="navbar-nav left">


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fas fa-clock text-after"></i>Open Hours: Mon - Sat - 9:00 - 18:00</a>
                    </li>


                </ul>


                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Top Bar [right] -->

                <ul class="navbar-nav right">


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fas fa-phone-alt text-after"></i>+971 585015666</a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fas fa-envelope text-after"></i>oceanoapexdubai@icloud.com</a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fab fa-facebook-f m-0"></i></a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i class="fab fa-twitter m-0"></i></a>
                    </li>


                    <li class="nav-item">

                        <a href="#" target="_self" class="nav-link m-0"><i
                                class="fab fa-linkedin-in m-0"></i></a>
                    </li>


                </ul>


            </div>
        </nav>



        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-fixed sub" style="position: absolute;">
            <div class="container header">


                <!-- Navbar [left] -->

                <a href="https://nexgen.codings.dev/" class="navbar-brand">
                    <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex"
                        class="d-none d-sm-block desktop-logo"><img width="286" height="100"
                        src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex" class="d-block d-sm-none responsive-logo"> </a>


                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Navbar [right] -->


                <ul id="menu-nexgen-menu-1" class="navbar-nav items right">
                    
                     
                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="#" class="nav-link">HOME</a></li>

                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="#" class="nav-link">ABOUT</a></li>
                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="#" class="nav-link">SERVICES</a></li>
                    <li id="menu-item-10573"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10573 nav-item"><a
                            href="#" class="nav-link">BLOG</a></li> 
                </ul>

                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-menu m-0"></i>
                        </a>
                    </li>
                </ul>




                



 



                <ul class="navbar-nav action d-md-block d-sm-block d-none">
                    <li class="nav-item">

                        <a href="#"
                            target="_blank" class="btn primary-button">CONTACT</a>
                    </li>
                </ul>


            </div>
        </nav>


    </header>

    {{-- PAGE CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer data-wpr-lazyrender="1" id="footer" class="footer">


        <!-- Main -->
        <section class="footer main offers">
            <div class="container">
                <div class="row items">


                    <div class="col-12 col-md-6 col-lg-3 item">


                        <div class="content-block brand">
                            <a href="" class="navbar-brand">
                                <img width="286" height="100" src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex"
                                    class="d-none d-sm-block desktop-logo"><img width="286" height="100"
                                    src="{{ asset('images/Oceano-Apex-Logo.png') }}" alt="Oceano Apex"
                                    class="d-block d-sm-none responsive-logo"> </a>
                        </div>


                        <div class="content-block paragraph">
                            <p>Oceano Apex is a trusted<br>
                                financia Advisory firm and<br>
                                growing wealth management <br>
                                company providing professional<br>
                                investment management<br>
                                services</p>
                        </div>


                         

                        <ul class="navbar-nav action content-block">
                            <li class="nav-item">

                                <a href="#"
                                    target="_blank" class="btn secondary-button">GET IN TOUCH</a>
                            </li>
                        </ul>

                    </div>


                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>About</h4>
                            <ul id="menu-nexgen-footer-1" class="footer-link-list">
                            <li id="menu-item-10684"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10684"><a
                                        href="#">About us</a></li>
                                <li id="menu-item-10684"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10684"><a
                                        href="{{ route('contact') }}">Contact </a></li>
                                <li id="menu-item-10685"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10685"><a
                                        href="#">Blog </a></li> 
                            </ul>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>Services</h4>
                            <ul id="menu-nexgen-footer-2" class="footer-link-list">
                                <li id="menu-item-14051"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14051"><a
                                        href="#">Hedge Funds </a></li>
                                <li id="menu-item-14052"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14052"><a
                                        href="#">Financial Advisory </a></li> 
                            </ul>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card">
                            <h4>Support</h4>
                            <ul id="menu-nexgen-footer-3" class="footer-link-list">
                                <li id="menu-item-14056"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14056"><a
                                        href="#">Terms of Use</a></li>
                                <li id="menu-item-14057"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14057"><a
                                        href="#">Privacy Policy</a></li> 
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>



        <!-- Bottom Bar -->
        <section class="bottom-bar" style="background-color: #000;">
            <div class="container">
                <div class="row">



                    <div class="col-12 col-md-6 p-0 text-left">

                        <!-- Bottom Bar [left] -->

                        <ul class="navbar-nav text-left text-lg-left">


                            <li class="nav-item d-block d-md-inline-flex">

                                <a href="https://themeasy.co" target="_blank" class="nav-link">© 2026 - All rights
                                    reserved. Oceano Apex is maintained by Themeasy.</a>
                            </li>


                        </ul>


                    </div>
                    <div class="col-12 col-md-6 p-0 text-left text-lg-right">

                        <!-- Bottom Bar [right] -->

                        <ul class="navbar-nav text-left text-lg-right">


                            <li class="nav-item">

                                <a href="#" target="_self" class="nav-link"><i
                                        class="fab fa-facebook-f m-0"></i></a>
                            </li>


                            <li class="nav-item">

                                <a href="#" target="_self" class="nav-link"><i
                                        class="fab fa-twitter m-0"></i></a>
                            </li>


                            <li class="nav-item">

                                <a href="#" target="_self" class="nav-link"><i
                                        class="fab fa-linkedin-in m-0"></i></a>
                            </li>


                        </ul>


                    </div>
                </div>
            </div>
        </section>


    </footer>

</body>
</html>