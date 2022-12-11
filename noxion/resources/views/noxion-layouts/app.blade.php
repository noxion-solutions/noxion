<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Noxion Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Noxion - Saas & Payment Software Landing Page Website Template" />
    <meta name="keywords" content="Application, Clean, Saas, Dashboard, Bootstrap4" />
    <meta content="sacredthemes" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('noxion-resources/images/Favicon.png') }}">
    <!-- WOW Animation -->
    <link href="{{ asset('noxion-resources/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap css -->
    <link href="{{ asset('noxion-resources/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slick Slider -->
    <link href="{{ asset('noxion-resources/css/slick.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('noxion-resources/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('noxion-resources/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('noxion-resources/css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main css File -->
    <link href="{{ asset('noxion-resources/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-default" />
    <link href="{{ asset('noxion-resources/css/rtl-style.css') }}" rel="stylesheet" type="text/css"
        id="rtl-theme-default" disabled="disabled" />
    <link href="{{ asset('noxion-resources/css/colors/default-color.css') }}" rel="stylesheet" type="text/css"
        id="theme-color" />
</head>

<body>
    <!-- box-wrapper -->
    <div class="box-wrapper">
        <!-- Loader -->
        {{-- <div id="preloader">
            <div id="status">
                <div class="d-loader">
                    <img src="{{ asset('noxion-resources/images/dcode-loader.gif') }}" alt="DCode">
                </div>
            </div>
        </div> --}}
        <!-- Loader -->
        <!-- Nav Bar -->
        <header id="master-head" class="navbar menu-absolute menu-center">
            <div class="container">
                <div id="main-logo" class="logo-container">
                    <a class="logo" href="{{route('/')}}">
                        <img style="width: 191px;" src="{{ asset('noxion-resources/images/NoxionColor.png') }}"
                            class="logo-dark" alt="DCode">
                        <img style="width: 191px;" src="{{ asset('noxion-resources/images/noxionlogowhite.png') }}"
                            class="logo-light" alt="DCode">
                    </a>
                </div>
                <div class="menu-toggle-btn">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="burger-lines">
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
                <div id="navigation" class="nav navbar-nav navbar-main">
                    <ul id="main-menu" class="menu-primary">
                        <li class="menu-item menu-item-has-children active">
                            <a href="index-standard.html">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="index-standard.html">Standard Software</a></li>
                                <li class="menu-item"><a href="index-crm.html">CRM software</a></li>
                                <li class="menu-item"><a href="index-security-software.html">Security Software</a></li>
                                <li class="menu-item"><a href="index-payment-software.html">Payment Software</a>
                                <li class="menu-item"><a href="index-erp-software.html">ERP Systems</a></li>
                                <li class="menu-item"><a href="index-digital-marketing.html">Digital Marketing</a></li>
                                <li class="menu-item active"><a href="index-ai-chatbot-software.html">AI Chatbot
                                        Software</a></li>
                                <li class="menu-item"><a href="index-lms-software.html">LMS Software</a></li>
                                <li class="menu-item"><a href="index-email-marketing.html">Email Marketing <span
                                            class="badge badge-danger rounded">New</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-aboutus-two.html">About Us Two</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-aboutus-three.html">About Us Three <span
                                                    class="badge badge-danger rounded">New</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('careers') }}">Careers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('job-details') }}">Job Details</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Auth Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a target="_blank" href="page-signin.html">Login</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" href="page-signin-two.html">Login Two</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" href="page-signup.html">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="page-404.html">404 (Not Found)</a>
                                </li>
                                <li class="menu-item">
                                    <a href="page-comingsoon.html" target="_blank">Coming Soon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Blogs</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Blog Standard</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="page-blog-grid-3-col.html">Blog Grid (3 Col)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-blog-grid-2-col.html">Blog Grid (2 Col)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-blog-with-sidebar.html">Blog with Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="page-blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Elements</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="element-content-box.html">Content Boxes</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-quotes-carousel.html">Quotes Carousel</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-counters-countdown.html">Counters & Countdown</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-tabs-accordions.html">Tabs & Accordions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children mega-menu">
                            <a href="#">Mega Menu</a>
                            <ul class="sub-menu mega-menu-inner">
                                <li class="menu-item col-title">
                                    <a href="#">Layouts</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="index-standard.html">Standard Software</a></li>
                                        <li class="menu-item"><a href="index-crm.html">CRM software</a></li>
                                        <li class="menu-item"><a href="index-security-software.html">Security
                                                Software</a></li>
                                        <li class="menu-item"><a href="index-payment-software.html">Payment
                                                Software</a></li>
                                        <li class="menu-item"><a href="index-erp-software.html">ERP Systems</a></li>
                                        <li class="menu-item"><a href="index-digital-marketing.html">Digital
                                                Marketing</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item col-title">
                                    <a href="#">Inner Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('about') }}">About Us</a></li>
                                        <li class="menu-item"><a href="page-services.html">Services</a></li>
                                        <li class="menu-item"><a href="page-contactus.html">Contact Us</a></li>
                                        <li class="menu-item"><a href="page-404.html">404 (Not Found)</a></li>
                                        <li class="menu-item"><a target="_blank" href="page-comingsoon.html">Coming
                                                Soon</a></li>
                                        <li class="menu-item"><a target="_blank"
                                                href="page-signin-two.html">Login/Register</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item col-title">
                                    <a href="#">Elements</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="element-content-box.html">Content Boxes</a>
                                        </li>
                                        <li class="menu-item"><a href="element-pricing-tables.html">Pricing Tables</a>
                                        </li>
                                        <li class="menu-item"><a href="element-quotes-carousel.html">Quotes
                                                Carousel</a></li>
                                        <li class="menu-item"><a href="element-counters-countdown.html">Counters &
                                                Countdown</a></li>
                                        <li class="menu-item"><a href="element-tabs-accordions.html">Tabs &
                                                Accordions</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item col-title">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="page-blog-grid-3-col.html">Blog Grid (3
                                                Col)</a></li>
                                        <li class="menu-item"><a href="page-blog-grid-2-col.html">Blog Grid (2
                                                Col)</a></li>
                                        <li class="menu-item"><a href="page-blog-with-sidebar.html">Blog with
                                                Sidebar</a></li>
                                        <li class="menu-item"><a href="page-blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right">
                    <div class="menu-button">
                        <a href="#" target="_blank">
                            <div class="btn btn-primary" style="padding: 5px 20px 5px 20px"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="white" class="w-6 h-6" style="width: 20px;">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg></div>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Nav Bar -->
        <!-- Main Wrapper -->
        @yield('content')
        <!-- Main Wrapper -->
        <footer class="site-footer footer-theme-two">
            <div class="container">
                <div class="main-footer style-dark">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="text-widget">
                                    <div class="about-info">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('noxion-resources/images/noxionlogowhite.png') }}"
                                                alt="" />
                                        </div>
                                        <p>Committed to meet deadlines, our deep software engineering and product
                                            expertise offer the best solutions to your
                                            business needs.</p>
                                    </div>

                                </div>
                            </div><!-- End Widget -->
                        </div><!-- End Col -->
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title">
                                    <h3 class="title">Useful Links</h3>
                                </div>
                                <div class="text-widget">
                                    <div class="footer-nav">
                                        <ul>
                                            <li><a href="{{route('about')}}">About Us</a></li>
                                            <li><a href="{{route('services')}}">Services</a></li>
                                            <li><a href="{{route('careers')}}">Careers</a></li>
                                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End Widget -->
                        </div><!-- End Col -->
                        {{-- <div class="col-lg-2">
                            <div class="widget">
                                <div class="widget-title">
                                    <h3 class="title">Support</h3>
                                </div>
                                <div class="text-widget">
                                    <div class="footer-nav">
                                        <ul>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Press</a></li>
                                            <li><a href="#">Community</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End Widget -->
                        </div><!-- End Col --> --}}
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title">
                                    <h3 class="title">Stay Updated</h3>
                                </div>
                                <div class="text-widget">
                                    <div class="contact-info">
                                        <ul>
                                            <li class="email-field">management@noxions.com</li>
                                            <li class="phone-field">+447 878 190 391</li>
                                            <li class="address-field">127 The Boxhill
                                                Coventry
                                                CV3 1EU</li>
                                        </ul>
                                    </div>
                                    <div class="social-media-links">
                                        <ul>
                                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End Widget -->
                        </div><!-- End Col -->
                    </div><!-- End Row -->
                </div>
                <div class="copyright-bar style-dark">
                    <div class="copyright-text text-center">
                        © Copyright Noxion Solutions. Made with <i class="fas fa-heart"></i> by <a
                            href="https://noxions.com" target="_blank"><strong>Noxion</strong></a>.
                    </div>
                </div>
            </div>
        </footer>
        <!-- Main Footer -->
        {{-- <div id="theme-option" class="option-panel">
            <h3>Select Your Color</h3>
            <ul class="pattern-color-list">
                <li><a href="#" data-url="default-color" class="default-color active"></a></li>
                <li><a href="#" data-url="orange-color" class="orange-color"></a></li>
                <li><a href="#" data-url="green-color" class="green-color"></a></li>
            </ul>
            <h3>RTL/LTR Option</h3>
            <div class="layout-option">
                <a href="#" class="btn btn-secondary btn-small enable rtl-version">RTL</a>
                <a href="#" class="btn btn-secondary btn-small ltr-version">LTR</a>
            </div>
            <div class="switcher-btn">
                <a href="#" class="settings">
                    <i class="mdi mdi-cog-outline mdi-spin"></i>
                </a>
            </div>
        </div> --}}
    </div>
    <!-- box-wrapper -->
    {{-- <div class="overlay overlay-search">
        <div class="close-search">
            <span class="lines"></span>
        </div>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <input type="search" class="form-control" name="SearchInput" placeholder="Search…">
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div> --}}
    <!--search-form-->

    <!-- javascript -->
    <script src="{{ asset('noxion-resources/js/jquery.min.js') }}"></script>
    <script src="{{ asset('noxion-resources/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('noxion-resources/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('noxion-resources/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('noxion-resources/js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('noxion-resources/js/appear.js') }}"></script>
    <!-- WOW Animation -->
    <script src="{{ asset('noxion-resources/js/wow.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('noxion-resources/js/slick.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('noxion-resources/js/dcode.js') }}"></script>
    <script type="text/javascript">
        setTimeout(function() {
            jQuery('.item.step-1').addClass('active');
        }, 3000);
    </script>
</body>

</html>