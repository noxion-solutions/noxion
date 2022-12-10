@extends('noxion-layouts.app')
@section('content')
    <div id="main-wrapper" class="page-wrapper">
        <div class="page-header section-padding full-height dc-seven">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="{{ asset('noxion-resources/images/default-color/ai-chatbot-img.png') }}"
                                alt="" />
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-6">
                        <div class="heading-wrapper with-separator wow fadeInLeft" data-wow-delay="0.2s">
                            <h1>AI Based chatbot for Connecting <span>Customers</span></h1>
                        </div>
                        <div class="text-wrapper wow fadeInLeft" data-wow-delay="0.4s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales dictum
                                viverra. Nam gravida dignissim eros. Vivamus congue erat ante, volutpat dictum neque
                                dignissim eget.</p>
                        </div>
                        <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.4s">
                            <a class="btn btn-primary" href="#">Try it free Now</a>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- Page Header -->
        <div class="features-section section-padding pt-0">
            <div class="container">
                <div class="row clearfix justify-content-center">
                    <div class="col-lg-8">
                        <div class="heading-wrapper with-separator text-center">
                            <h2 class="h1">Countless <span>Key Features</span></h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit
                                    gravida, quis tincidunt purus fringilla. Aenean convallis a neque non
                                    pellentesque.</p>
                            </div>
                        </div>
                        <!-- End Heading -->
                        <div class="d-lg-none d-xl-block empty-space-30"></div>
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
                                        <li>ASP.NET</li>
                                        <li>
                                            C#
                                        </li>
                                        <li>
                                            Umbraco
                                        </li>
                                        <li>DNN</li>
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
                                    <h3 class="dc-features-title">Server Management And Domain Services Support Services
                                    </h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Server Management And Domain Services Support Services
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
                                    <h3 class="dc-features-title">Laravel</h3>
                                </div>
                            </div>
                            <div class="dc-features-item-hover">
                                <div class="inner-box">
                                    <h3 class="dc-features-title">Laravel</h3>
                                    <p>We have developed some of the most significant laravel projects over the years.</p>
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
        </div>
        <!-- Features Section -->
        <div class="section-padding light-gradient-bg">
            <div class="container">
                <div class="row clearfix justify-content-center">
                    <div class="col-lg-8">
                        <div class="heading-wrapper text-center">
                            <h2 class="h1"><span>Automation is like Magic,</span> How It Works</h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit
                                    gravida, quis tincidunt purus fringilla. Aenean convallis a neque non
                                    pellentesque.</p>
                            </div>
                        </div><!-- End Heading -->
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="timeline timeline-slider">
                            <div class="timeline-item">
                                <div class="timeline-wrapper">
                                    <div class="step-number">
                                        <span>1</span>
                                    </div>
                                    <div class="content">
                                        <h4>Analysis</h4>
                                        <p>Business requirements are compiled and analyzed by a business analyst, domain
                                            expert, and project manager.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-wrapper">
                                    <div class="step-number">
                                        <span>2</span>
                                    </div>
                                    <div class="content">
                                        <h4>Implementation</h4>
                                        <p>This is an important phase for developers. They need to be flexible if any
                                            changes are introduced by the business analyst.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-wrapper">
                                    <div class="step-number">
                                        <span>3</span>
                                    </div>
                                    <div class="content">
                                        <h4>Deployment</h4>
                                        <p> Deployment Phase provides for production installation for the software,
                                            requiring all test cases to verify successful software execution and
                                            completeness.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-wrapper">
                                    <div class="step-number">
                                        <span>4</span>
                                    </div>
                                    <div class="content">
                                        <h4>Support</h4>
                                        <p>Access to knowledgeable, reliable support resources is
                                            essential, as is routine maintenance and staying up to date on upgrades.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="presentation-section section-padding style-dark dark-bg gradient-heading-bg">
            <div class="container">
                <div class="row clearfix justify-content-center">
                    <div class="col-lg-10">
                        <div class="heading-wrapper text-center">
                            <h2 class="h1">Watch this video <span>Presentation</span> to Know More</h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit
                                    gravida, quis tincidunt purus fringilla. Aenean convallis a neque non
                                    pellentesque.</p>
                            </div>
                        </div><!-- End Heading -->
                        <div class="empty-space-60 clearfix"></div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row clearfix justify-content-center">
                    <div class="col-lg-9">
                        <div class="video-wrapper">
                            <div class="video-player">
                                <iframe width="100%" height="480" src="https://www.youtube.com/embed/I7CfaDYzTVM"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="empty-space-30 clearfix"></div>
                        <div class="newsletter-form style-two text-center">
                            <h3>Sign up and receive the latest news via email!</h3>
                            <form method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="EmailInput"
                                        placeholder="Enter email address" required="">
                                </div>
                                <button type="submit">Subscribe Now!</button>
                            </form>
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- Benefits Section -->
        <div class="pricing-section section-padding">
            <div class="container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-4">
                        <div class="heading-wrapper with-separator">
                            <h2 class="h1">Pricing Plans</h2>
                        </div><!-- End Heading -->
                        <div class="text-wrapper">
                            <h4>Begin leveraging your market data today.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit
                                gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.
                            </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="#" class="btn link-btn">Compare all features.</a>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-8">
                        <div class="row pricing-plans-three align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="price-card wow fadeInRight" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <h3 class="card-title">Start-Up</h3>
                                        <div class="plan-cost-wrapper">
                                            <div class="plan-cost">
                                                <span class="plan-cost-prefix">$</span>49
                                            </div>
                                            <div class="plan-validity">/ mo</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem
                                                nunc, semper sed metus at, lacinia viverra leo.</p>
                                        </div>
                                        <ul class="pricing-feature-list">
                                            <li>5 Chatbot</li>
                                            <li>1000 Monthly Message</li>
                                            <li>250 Subscribers </li>
                                        </ul>
                                        <a href="#" class="btn btn-secondary">Purchase Now</a>
                                    </div>
                                </div><!-- End Price card -->
                            </div><!-- End Col -->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="price-card popular wow fadeInRight" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <h3 class="card-title">Advanced</h3>
                                        <div class="plan-cost-wrapper">
                                            <div class="plan-cost">
                                                <span class="plan-cost-prefix">$</span>99
                                            </div>
                                            <div class="plan-validity">/ mo</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem
                                                nunc, semper sed metus at, lacinia viverra leo.</p>
                                        </div>
                                        <ul class="pricing-feature-list">
                                            <li>5 Chatbot</li>
                                            <li>1000 Monthly Message</li>
                                            <li>250 Subscribers </li>
                                            <li>No Watermark</li>
                                            <li>Internal Support Services</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Purchase Now</a>
                                    </div>
                                </div><!-- End Price card -->
                            </div><!-- End Col -->
                        </div><!-- End Row -->
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- Pricing Section -->
        <div class="testimonial-section style-two section-padding">
            <div class="container">
                <div class="row clearfix style-dark">
                    <div class="col-lg-8">
                        <div class="heading-wrapper">
                            <h2 class="h1">Happy Clients <span>Feedback</span></h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit
                                    gravida, quis tincidunt purus fringilla. Aenean convallis a neque non
                                    pellentesque.</p>
                            </div>
                        </div><!-- End Heading -->
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="client-testimonial theme-two">
                            <div class="testimonial-slider">
                                <div class="item">
                                    <div class="testimonial-text">
                                        <blockquote>
                                            Their product is topnotch I've worked with a few companies that offer the same
                                            services and Noxion is by far the easiest to use, great price, and support is
                                            super helpful and kind.
                                        </blockquote>
                                        <div class="client-info">
                                            <h5>Andy Sant</h5>
                                            <p>Founder Coinpool</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-text">
                                        <blockquote>
                                            Fast response to my email. Requested an invoice and received it in a timely
                                            manner.
                                        </blockquote>
                                        <div class="client-info">
                                            <h5>Dan Kaul</h5>
                                            <p>IT Consultant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-text">
                                        <blockquote>
                                            Great helpdesk service, very fast and so polite, Cecilia is the best partner to
                                            talk if you have any problem
                                        </blockquote>
                                        <div class="client-info">
                                            <h5>Saru Matt</h5>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-text">
                                        <blockquote>
                                            It's very easy to use and user friendly. It has helped us digitise our
                                            restaurant menu during covid and increased our customer satisfaction and our
                                            review score.
                                        </blockquote>
                                        <div class="client-info">
                                            <h5>Yommi Pat</h5>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-text">
                                        <blockquote>
                                            We used this as a one off project which it worked well for. Online support is
                                            very quick and efficient. Thanks.
                                        </blockquote>
                                        <div class="client-info">
                                            <h5>Shreyn S</h5>
                                            <p>Data Science Enthusiastic</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Testimonial Slider -->
                        </div>
                    </div><!-- End Col -->
                </div><!-- End Row -->
            </div>
        </div>
        <!-- Testimonial Section -->
        <div class="companies-section section-padding pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="heading-wrapper text-center with-separator">
                            <h2 class="h1">Trusted by many <span>industries</span></h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit
                                    gravida, quis tincidunt purus fringilla. Aenean convallis a neque non
                                    pellentesque.</p>
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
                                    Hospitality
                                </div>
                            </div>
                            <div class="item">
                                <div class="logo-wrapper"><img
                                        src="{{ asset('noxion-resources/images/company-logo-3.png') }}"
                                        alt="">B2B
                                    Solutions
                                </div>
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
                                    e-Learning
                                </div>
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
    </div>
@endsection
