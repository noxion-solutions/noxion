@extends('noxion-layouts.app')
@section('content')
    <div id="main-wrapper" class="page-wrapper">
        {{-- <div class="inner-page-header section-padding style-dark">
            <div class="container">
                <div class="page-title-inner text-center clearfix">
                    <div class="heading-wrapper">
                        <h1 class="h1">About Us</h1>
                        <div class="lead-text">
                            <p>What makes a great company? It's really easy. It's also the people that are working here.</p>
                        </div>
                    </div><!-- End Heading -->
                    <ul class="st-breadcrumb">
                        <li><a href="index-standard.html">Home</a></li>
                        <li class="active"><span>About Us</span></li>
                    </ul><!-- End Breadcrumb -->
                </div><!-- Page Title Inner -->
            </div>
        </div> --}}
        <!-- Page Header -->
        <div style="margin-top:80px" class="about-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft">
                        <div class="image-wrapper">
                            <img src="{{ asset('noxion-recourses/images/default-color/user-interface-img.png') }}"
                                alt="">
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-6">
                        <div class="heading-wrapper with-separator">
                            <span class="sub-title">About Dcode</span>
                            <h2 class="h1">Why the best choose to <span>work with us</span></h2>
                        </div><!-- End Heading -->
                        <div class="text-wrapper">
                            <p></p>
                            <ul class="list-style-one">
                                <li>
                                    <h5>Security & Data Protection</h5> Your contract of engagement is with our UK company
                                    (DotSquares Ltd), so our liability to you is governed and protected by UK
                                    law. This is a very important detail that sets us apart from many offshoring companies.
                                    Furthermore, all Intellectual Property Rights & source code are yours,
                                    forever
                                </li>
                                <li>
                                    <h5>Competitive rates</h5>
                                    Even though our service is a cut above the rest, we remain competitively priced. Our
                                    developer rates start from as little as £15/hr.
                                    Agencies who work with us enjoy making more profit per client and have a higher
                                    throughput of projects
                                </li>
                                <li>
                                    <h5>Quality</h5>
                                    - We are CMMI level 3 appraised and members of the Agile Alliance, which is your
                                    assurance that we have processes and safeguards in place to
                                    ensure the delivery of a high quality finished product, each and every time. Read more
                                    about our CMMI appraisal.
                                </li>
                                <li>
                                    <h5>Flexibility</h5>
                                    Our massive permanent workforce is comprised of designers, developers and PMs. You can
                                    hire as many or as few of them as you need - on a
                                    per project or retained basis. This flexibility means that you're never paying for
                                    skills and time that you're not using.
                                </li>
                                <li>
                                    <h5>In-house expertise</h5>
                                    Every one of our 900+ designers, developers and project managers in the UK, India and
                                    Worldwide are directly employed by us, and
                                    they work in offices that are owned by us. This enables us to ensure continuity of
                                    knowledge and in fact, many of our team members have been working with
                                    the same clients for years - maintaining consistently high quality, reliability and
                                    efficiency at all times
                                </li>
                                <li>
                                    <h5>The original, and best</h5>
                                    We've been servicing UK businesses like yours with offshore teams for 20 years. In fact,
                                    we were one of the first companies to set up
                                    this offshore business model, back in 2002. Since then we've completed over 18,421
                                    projects (at last count, and we are still growing!) Our scalability provides
                                    you with the best talent backed up by guarantees and consumer protection, whilst our
                                    attention to detail, perfectionism and personal service still makes every
                                    customer feel very special indeed.
                                </li>
                            </ul>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-primary" href="#">Purchase Now</a>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div><!-- About Section -->
        <div class="our-team section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="heading-wrapper text-center with-separator">
                            <h2 class="h1">Our Team <span>Experts</span></h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida,
                                    quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                            </div>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="st-team-member theme-one wow fadeInUp">
                            <div class="team-member-wrapper">
                                <div class="st-team-image">
                                    <img src="{{ asset('noxion-resources/images/team-3-rect.jpg') }}" alt="">
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="st-team-member-detail">
                                    <h3 class="member-name">Dan Kaul</h3>
                                    <span class="member-position">CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-member-wrapper">
                                <div class="st-team-image">
                                    <img src="{{ asset('noxion-resources/images/team-4-rect.jpg') }}" alt="">
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="st-team-member-detail">
                                    <h3 class="member-name">Andy Sant</h3>
                                    <span class="member-position">Planer & Manager</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-member-wrapper">
                                <div class="st-team-image">
                                    <img src="{{ asset('noxion-resources/images/team-5-rect.jpg') }}" alt="">
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="st-team-member-detail">
                                    <h3 class="member-name">Saru Matt</h3>
                                    <span class="member-position">Sales Head</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-3 col-md-6">
                        <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.6s">
                            <div class="team-member-wrapper">
                                <div class="st-team-image">
                                    <img src="{{ asset('noxion-resources/images/team-2-rect.jpg') }}" alt="">
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="st-team-member-detail">
                                    <h3 class="member-name">Shreyn S</h3>
                                    <span class="member-position">Analytical Head</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
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
                            <a href="#" class="btn btn-primary btn-light btn-large">Contact Us Now!</a>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- Call to Action Section -->
        <div class="companies-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="heading-wrapper text-center with-separator">
                            <h2 class="h1">Trusted by many <span>industries</span></h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida,
                                    quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                            </div>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="companies-logo">
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-1.png') }}"
                                        alt="">Real Estate
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-2.png') }}"
                                        alt="">Travel &
                                    Hospitality</div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-3.png') }}" alt="">B2B
                                    Solutions</div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-4.png') }}"
                                        alt="">Healthcare
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-5.png') }}"
                                        alt="">Education &
                                    e-Learning</div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="companies-logo">
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-1.png') }}"
                                        alt="">Banking &
                                    Finance
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-2.png') }}"
                                        alt="">Startup
                                    Solutions</div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img src="images/company-logo-3.png" alt="">Media &
                                    Publishing</div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img src="images/company-logo-4.png" alt="">Food
                                    Ordering Solutions
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img src="images/company-logo-5.png" alt="">Train
                                    Ticket Booking Solutions</div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- companies Section -->
        <div class="fact-section style-dark dark-bg">
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
        </div>
        <div class="section-padding light-gradient-bg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-block theme-one wow fadeInLeft">
                            <div class="inner-box">
                                <div class="icon">
                                    <img class="normal"
                                        src="{{ asset('noxion-resources/images/default-color/icon-5.svg') }}"
                                        alt="">
                                    <img class="hover"
                                        src="{{ asset('noxion-resources/images/default-color/icon-5-light.svg') }}"
                                        alt="">
                                </div>
                                <div class="text">
                                    <h4>Our Responsibility</h4>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exer citation ullamco laboris.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-4">
                        <div class="features-block theme-one wow fadeInUp">
                            <div class="inner-box">
                                <div class="icon">
                                    <img class="normal"
                                        src="{{ asset('noxion-resources/images/default-color/icon-5.svg') }}"
                                        alt="">
                                    <img class="hover"
                                        src="{{ asset('noxion-resources/images/default-color/icon-5-light.svg') }}"
                                        alt="">
                                </div>
                                <div class="text">
                                    <h4>Our Approach</h4>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exer citation ullamco laboris.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-4">
                        <div class="features-block theme-one wow fadeInRight">
                            <div class="inner-box">
                                <div class="icon">
                                    <img class="normal"
                                        src="{{ asset('noxion-resources/images/default-color/icon-5.svg') }}"
                                        alt="">
                                    <img class="hover"
                                        src="{{ asset('noxion-resources/images/default-color/icon-5-light.svg') }}"
                                        alt="">
                                </div>
                                <div class="text">
                                    <h4>Our Mission, Vission</h4>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exer citation ullamco laboris.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div><!-- Our Approach Section -->
    </div>
@endsection
