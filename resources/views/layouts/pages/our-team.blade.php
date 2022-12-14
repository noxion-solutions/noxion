@extends('noxion-layouts.app')
@section('content')
    <div class="page-header section-padding style-dark full-height dc-three left-col-full" style="
    margin-top: 90px;
">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{ asset('noxion-resources/images/default-color/security-software-img.png') }}"
                            alt="">
                    </div>
                </div><!-- End Col -->
                <div class="col-lg-6">
                    <div class="heading-wrapper wow fadeInRight" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <h1>Your Search For <span>Top Tech Talent </span>Ends Here.</h1>
                    </div>
                    <div class="text-wrapper wow fadeInRight" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <p class="lead-text">Powerful security for your digital life — made easy.</p>

                    </div>
                    <div class="btn-wrapper wow fadeInRight" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                        <a class="btn btn-primary btn-light " href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div><!-- End Col -->
            </div><!-- End Row -->
        </div>
    </div>
    <div style="margin-top:80px" class="our-team section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="heading-wrapper text-center with-separator">
                        <h2 class="h1">Our Team <span>Experts</span></h2>
                        <div class="lead-text">
                        </div>
                    </div>
                </div><!-- End Col -->
            </div><!-- End Row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="st-team-member theme-one wow">
                        <div class="team-member-wrapper">
                            <div class="st-team-image">
                                <img style="
                                object-fit: cover;"
                                    src="{{ asset('noxion-resources/images/team1.jpeg') }}" width="270" height="330"
                                    alt="">

                            </div>
                            <div class="st-team-member-detail">
                                <h3 class="member-name">Dan Kaul</h3>
                                <span class="member-position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Col -->
                <div class="col-lg-3 col-md-6">
                    <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-member-wrapper">
                            <div class="st-team-image">
                                <img style="
                                object-fit: cover;
                            "
                                    src="{{ asset('noxion-resources/images/team2.jpeg') }}" width="270" height="330"
                                    alt="">

                            </div>
                            <div class="st-team-member-detail">
                                <h3 class="member-name">Andy Sant</h3>
                                <span class="member-position">UI/UX Designer</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Col -->
                <div class="col-lg-3 col-md-6">
                    <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-member-wrapper">
                            <div class="st-team-image">
                                <img style="
                                object-fit: cover;
                            "
                                    src="{{ asset('noxion-resources/images/team3.jpeg') }}" width="270" height="330"
                                    alt="">

                            </div>
                            <div class="st-team-member-detail">
                                <h3 class="member-name">David Callis</h3>
                                <span class="member-position">Testing Expert</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Col -->
                <div class="col-lg-3 col-md-6">
                    <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-member-wrapper">
                            <div class="st-team-image">
                                <img style="
                                object-fit: cover;
                            "
                                    src="{{ asset('noxion-resources/images/team4.jpeg') }}" width="270" height="330"
                                    alt="">

                            </div>
                            <div class="st-team-member-detail">
                                <h3 class="member-name">Robbie Williams</h3>
                                <span class="member-position">Sr. Database Engineer</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Col -->
            </div><!-- End Row -->
        </div>
    </div>
@endsection
