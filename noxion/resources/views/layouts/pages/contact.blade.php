@extends('noxion-layouts.app')
@section('content')
<div id="main-wrapper" class="page-wrapper">
    <div style="margin-top:70px" class="section-padding style-light">
        <div class="container">
            <div class="page-title-inner text-center clearfix">
                <div class="heading-wrapper">
                    <h1 class="h1">Contact Us</h1>
                    <div class="lead-text">
                        <p>Let's get started!</p>
                    </div>
                </div><!-- End Heading -->
                <ul class="st-breadcrumb">
                    <li><a href="index-standard.html">Home</a></li>
                    <li class="active"><span>Contact Us</span></li>
                </ul><!-- End Breadcrumb -->
            </div><!-- Page Title Inner -->
        </div>
    </div>
    <!-- Page Header -->
    <div class="about-section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="contact-wrapper">
                            <div class="icon">
                                <i class="mdi mdi-phone-incoming-outline"></i>
                            </div>
                            <div class="content">
                                <h4>Phone</h4>
                                <p>Our customer care is open 24/7</p>
                                <p><a class="btn link-btn" href="tel:+447878190391">+(447) 878 190 391</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-box wow fadeInLeft" data-wow-delay="1s">
                        <div class="contact-wrapper">
                            <div class="icon">
                                <i class="mdi mdi-email-open-outline"></i>
                            </div>
                            <div class="content">
                                <h4>Email</h4>
                                <p>Our support team will get back to in 48-h during standard business hours.</p>
                                <p><a class="btn link-btn" href="mailto:example@gmail.com">management@noxions.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- End Col -->
                <div class="col-lg-8">
                    <div class="heading-wrapper with-separator">
                        <span class="sub-title">Get in touch</span>
                        <h2 class="h1"><span>Connect</span> with us</h2>
                    </div><!-- End Heading -->
                    <div class="text-wrapper">
                        <p>Please contact us using the details below. For more information about our services, please
                            visit the corresponding page on our web.</p>
                    </div>
                    <div class="contact-form">
                        <form action="{{ route('store-contact') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="firstName" class="form-control" id="FiratName"
                                        placeholder="First Name" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="lastName" id="LastName"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Address" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="How can I help you?" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message"
                                    placeholder="Tell me more about your requirement"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div><!-- End Col -->
            </div><!-- End Row -->
        </div>
    </div><!-- About Section -->
    <div class="map-custom-embed">
        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=127 The Boxhill Coventry CV3 1EU&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        {{-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d290064.3940311404!2d-73.80301030120093!3d40.696311456765976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27dd096d4f22b%3A0xaa0ef3dc7a282ef1!2s561%20Bellmore%20Ave%2C%20East%20Meadow%2C%20NY%2011554%2C%20USA!5e0!3m2!1sen!2sin!4v1596798783373!5m2!1sen!2sin"></iframe>
        --}}
    </div><!-- Map Section -->
</div>
@endsection