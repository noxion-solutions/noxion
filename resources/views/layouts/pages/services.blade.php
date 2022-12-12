@extends('noxion-layouts.app')
@section('content')
    <div id="main-wrapper" class="page-wrapper" style="margin-top: 90px;">
        <div class="page-header section-padding style-dark full-height dc-eight">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="heading-wrapper wow fadeInRight" data-wow-delay="0.2s">
                            <h1>We provide <span>some of the best</span> services at Noxions.</h1>
                        </div>
                        <div class="text-wrapper wow fadeInRight" data-wow-delay="0.4s">
                        </div>
                        <div class="btn-wrapper wow fadeInRight" data-wow-delay="0.5s">
                            <a class="btn btn-primary btn-light " href="#">Explore</a>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="{{ asset('noxion-resources/images/default-color/lms-software-img.png') }}"
                                alt="" />
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        {{-- <div class="fact-section style-dark dark-bg">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-5">
                        <div class="heading-wrapper pt-100 pb-30">
                            <h2 class="h1">Our <span>Innovative platform</span> that convert visitors into customars.
                            </h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida.
                                </p>
                            </div>
                        </div><!-- End Heading -->
                    </div><!-- End Col -->
                    <div class="col-md-7">
                        <div class="counter-wrapper with-separator two-col-stack">
                            <div class="counter-block with-icon wow fadeIn"
                                style="visibility: visible; animation-name: fadeIn;">
                                <div class="counter-icon">
                                    <img src="images/default-color/icon-14-light.svg" alt="Total Downloads">
                                </div>
                                <div class="counter counted">
                                    <span class="counter-number-prefix"></span>
                                    <span class="counter-number" data-speed="3500" data-stop="2020">2020</span>
                                    <span class="counter-number-after"></span>
                                    <span class="counter-number-suffix"></span>
                                </div>
                                <div class="counter-title">Year We were Established</div>
                            </div>
                            <div class="counter-block with-icon wow fadeIn" data-wow-delay="0.3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                <div class="counter-icon">
                                    <img src="images/default-color/icon-12-light.svg" alt="Positive Reviews">
                                </div>
                                <div class="counter counted">
                                    <span class="counter-number-prefix"></span>
                                    <span class="counter-number" data-speed="1000" data-stop="3">3</span>
                                    <span class="counter-number-after">m</span>
                                    <span class="counter-number-suffix"></span>
                                </div>
                                <div class="counter-title">Monthly Active Users</div>
                            </div>
                            <div class="counter-block with-icon wow fadeIn" data-wow-delay="0.6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                <div class="counter-icon">
                                    <img src="images/default-color/icon-13-light.svg" alt="Happy Users">
                                </div>
                                <div class="counter counted">
                                    <span class="counter-number-prefix"></span>
                                    <span class="counter-number" data-speed="3500" data-stop="80">80</span>
                                    <span class="counter-number-after"></span>
                                    <span class="counter-number-suffix">+</span>
                                </div>
                                <div class="counter-title">Members in Our Exclusive Team</div>
                            </div>
                            <div class="counter-block with-icon wow fadeIn" data-wow-delay="0.9s"
                                style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
                                <div class="counter-icon">
                                    <img src="images/default-color/icon-11-light.svg" alt="Years of Operation">
                                </div>
                                <div class="counter counted">
                                    <span class="counter-number-prefix"></span>
                                    <span class="counter-number" data-speed="3500" data-stop="10">10</span>
                                    <span class="counter-number-after"></span>
                                    <span class="counter-number-suffix">+</span>
                                </div>
                                <div class="counter-title">Countries using Our Products</div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div> --}}
        <!-- Page Header -->
        <div class="service-section section-padding" style="margin-top: 80px">
            <div class="row clearfix justify-content-center">
                <div class="col-lg-8">
                    <div class="heading-wrapper with-separator text-center">
                        <h2 class="h1">These Are The <span>Services</span> We Offer</h2>
                        <div class="lead-text">
                            <p style="">We develop individualized software solutions, which is unique and beyond the
                                standard
                                approach, to meet client’s
                                specific needs.</p>
                        </div>
                    </div>
                    <!-- End Heading -->
                    <div class="d-lg-none d-xl-block empty-space-30"></div>
                </div><!-- End Col -->
            </div><!-- End Row -->
            <div class="container">
                <div class="row clearfix no-gutters dc-features-group">
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-2.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">Website
                                        Development</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Website
                                        Development</h3>
                                    <p>Team In India can design and develop a solution targeted to your organization's
                                        specific needs - custom web development. We make sure your needs
                                        are not only heard but met, effectively.</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-20.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">C#</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">C#</h3>
                                    <p>Here at Team In India our goals are to deliver work that exceeds our client's
                                        satisfaction. With the strength of our core values and our vast array of
                                        skills, we promise to deliver the ultimate web applications and services.

                                    </p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-4.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">Game Development</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Game Development</h3>
                                    <p>We understand what can turn a good gaming idea into a fantabulously great game. We've
                                        got expert game developers who do it all wonderfully and at
                                        an amazing speed</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-5.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">Social Network Websites</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Social Network Websites</h3>
                                    <p>We deliver Custom Social Networking and Collaboration platforms and build Online
                                        Communities and Knowledge Networks, with great user
                                        experience and responsive web design providing you full ownership rights to a custom
                                        solution.</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->

                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-19.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">Server Management
                                    </h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Server Management
                                    </h3>
                                    <p>Server infrastructure is the centerpiece of any technology planning. Servers enable
                                        process integration and facilitate collaboration among internal and
                                        external stakeholders. Team In India provides you this amazing service.</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-9.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">Portal Development</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Portal Development</h3>
                                    <p>We offer full-cycle development services to create a web portal that supports your
                                        business strategy. We've deployed amazing and experienced web
                                        developers, each of whom have an affinity towards coding and developing.</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row clearfix no-gutters dc-features-group">
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-2.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">E-Commerce Development</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Laravel</h3>
                                    <p>With rich, dynamic and customer oriented B2C solutions, Team In India is in a strong
                                        position to assist business efficiently. Helping our clients achieve
                                        business growth through the medium of our services is what keeps us motivated.</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-20.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">CMS Solutions</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">CMS Solutions</h3>
                                    <p>With rich, dynamic and customer oriented B2C solutions, Team In India is in a strong
                                        position to assist business efficiently. Helping our clients achieve
                                        business growth through the medium of our services is what keeps us motivated</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                    <div class="col-lg-4 col-md-6 dc-features-item">
                        <a href="#">
                            <div class="dc-features-item-front">
                                <div class="inner-box">
                                    <div class="icon">
                                        <img class="normal"
                                            src="{{ asset('noxion-resources/images/default-color/icon-4.svg') }}"
                                            alt="">
                                    </div>
                                    <h3 class="dc-features-title">Education & e-Learning Development</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Education & e-Learning Development</h3>
                                    <p>e-Learning can revolutionize the way developing and 3rd world countries educate their
                                        people. At Team In India we develop education and e-learning
                                        websites, ones that surpass quality and standards of the ones already made.</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div><!-- About Section -->
        <div class="cta-section section-padding style-dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="call-to-action-content i-text-center">
                            <h2 class="h1">Get a personalized demo, instantly. <span class="special-fonts">Schedule a
                                    demo</span></h2>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-5">
                        <div class="call-to-action-btn text-right i-text-center">
                            <a href="{{ route('contact') }}" class="btn btn-primary btn-light btn-large">Contact Us
                                Now!</a>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- Call to Action Section -->
        <div class="testimonial-section section-padding">
            <div class="container">
                <div class="row justify-content-center clearfix">
                    <div class="col-lg-8">
                        <div class="heading-wrapper text-center with-separator">
                            <h2 class="h1">Happy Clients <span>Feedback</span></h2>
                        </div><!-- End Heading -->
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="client-testimonial theme-four">
                            <div class="testimonial-slider">
                                <div class="item">
                                    <div class="client-info-wrapper">
                                        <div class="client-img">
                                            <img src="{{ asset('noxion-resources/images/empty_person.png') }}"
                                                alt="client">
                                        </div>
                                        <div class="client-info">
                                            <h5>Cameron McDonalds</h5>
                                            <p>Founder Coinpool</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <blockquote>
                                            Their product is topnotch I've worked with a few companies that offer the same
                                            services and Noxion is by far the easiest to use, great price, and support is
                                            super helpful and kind.
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-info-wrapper">
                                        <div class="client-img">
                                            <img src="{{ asset('noxion-resources/images/empty_person.png') }}"
                                                alt="client">
                                        </div>
                                        <div class="client-info">
                                            <h5>Stephen Johnson</h5>
                                            <p>Founder Coinpool</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <blockquote>
                                            Fast response to my email. Requested an invoice and received it in a timely
                                            manner.
                                        </blockquote>
                                    </div>

                                </div>
                                <div class="item">
                                    <div class="client-info-wrapper">
                                        <div class="client-img">
                                            <img src="{{ asset('noxion-resources/images/empty_person.png') }}"
                                                alt="client">
                                        </div>
                                        <div class="client-info">
                                            <h5>Andrew Smith</h5>
                                            <p>IT Consultant</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <blockquote>
                                            Great helpdesk service, very fast and so polite, Cecilia is the best partner to
                                            talk if you have any problem
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-info-wrapper">
                                        <div class="client-img">
                                            <img src="{{ asset('noxion-resources/images/empty_person.png') }}"
                                                alt="client">
                                        </div>
                                        <div class="client-info">
                                            <h5>Kyle Morello</h5>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <blockquote>
                                            It's very easy to use and user friendly. It has helped us digitise our
                                            restaurant menu during covid and increased our customer satisfaction and our
                                            review score.
                                        </blockquote>
                                    </div>

                                </div>
                                <div class="item">
                                    <div class="client-info-wrapper">
                                        <div class="client-img">
                                            <img src="{{ asset('noxion-resources/images/empty_person.png') }}"
                                                alt="client">
                                        </div>
                                        <div class="client-info">
                                            <h5>Patrick Green</h5>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text">
                                        <blockquote>
                                            We used this as a one off project which it worked well for. Online support is
                                            very quick and efficient. Thanks.
                                        </blockquote>

                                    </div>
                                </div>
                            </div><!-- End Testimonial Slider -->
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- Testimonial Section -->
    </div>
@endsection
