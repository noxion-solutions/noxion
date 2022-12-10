@extends('noxion-layouts.app')
@section('content')
    <div id="main-wrapper" class="page-wrapper">
        <div style="margin-top:70px" class="section-padding style-light">
            <div class="container">
                <div class="page-title-inner text-center clearfix">
                    <div class="heading-wrapper">
                        <h1 class="h1">Careers</h1>
                        <div class="lead-text">
                            <p>What makes a great company? It's really easy. It's also the people that are working here.</p>
                        </div>
                    </div><!-- End Heading -->
                    <ul class="st-breadcrumb">
                        <li><a href="index-standard.html">Home</a></li>
                        <li class="active"><span>Careers</span></li>
                    </ul><!-- End Breadcrumb -->
                </div><!-- Page Title Inner -->
            </div>
        </div>
        <!-- Page Header -->

        <div class="section-padding light-bg">
            <div class="container">
                <div class="row clearfix justify-content-center">
                    <div class="col-lg-8">
                        <div class="heading-wrapper with-separator text-center">
                            <h2 class="h1">Opening <span>Positions</span></h2>
                            <div class="lead-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida,
                                    quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                            </div>
                        </div>
                        <!-- End Heading -->
                    </div><!-- End Col -->
                </div><!-- End Row -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="panel-group style-2" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading0">
                                    <h3 class="panel-title">
                                        <a class="collapsed" role="button" title="" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapse0" aria-expanded="true"
                                            aria-controls="collapse0">Front-end Developer</a>
                                    </h3>
                                </div>
                                <div id="collapse0" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading0">
                                    <div class="panel-body">
                                        <p>Nunc scelerisque bibendum felis eu aliquet. Quisque et neque in diam feugiat
                                            dapibus laoreet vitae risus. Aliquam in mauris ante. Nullam porta, metus at
                                            dictum consectetur, mi risus auctor eros, id interdum nisl velit et ante.</p>
                                        <p><a class="btn btn-primary" href="page-job-details.html">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1">
                                    <h3 class="panel-title">
                                        <a class="collapsed" role="button" title="" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapse1" aria-expanded="true"
                                            aria-controls="collapse1">Senior Business Analyst, Data Analytics</a>
                                    </h3>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading1">
                                    <div class="panel-body">
                                        <p>Nullam a nisl vitae sapien aliquet pellentesque. Mauris dui felis, sagittis non
                                            turpis quis, molestie facilisis quam. Ut ut augue tempor, tristique odio vitae,
                                            auctor erat. Sed finibus, magna a condimentum ultricies, lectus nisl euismod
                                            lectus, id aliquet mi velit in metus.</p>
                                        <p><a class="btn btn-primary" href="page-job-details.html">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2">
                                    <h3 class="panel-title">
                                        <a class="collapsed" role="button" title="" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapse2" aria-expanded="true"
                                            aria-controls="collapse2">Social Media Marketing Manager</a>
                                    </h3>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading2">
                                    <div class="panel-body">
                                        <p>Suspendisse condimentum efficitur leo, vitae porttitor risus ornare nec. Maecenas
                                            eget lorem vestibulum, vestibulum nulla et, posuere nibh.</p>
                                        <p><a class="btn btn-primary" href="page-job-details.html">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h3 class="panel-title">
                                        <a class="collapsed" role="button" title="" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapse3" aria-expanded="true"
                                            aria-controls="collapse3">Senior Content Writer</a>
                                    </h3>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading3">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus
                                            mauris, ullamcorper quis fringilla pretium, faucibus quis enim. Proin at lorem
                                            nunc. Curabitur at scelerisque felis.</p>
                                        <p><a class="btn btn-primary" href="page-job-details.html">Apply Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
