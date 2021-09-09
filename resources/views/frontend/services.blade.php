@extends('layouts.frontend_app')

@section('content')

    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Services</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/')}}">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="box-area m-0 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-box single-box-2 bg-4">
                        <i class="flaticon-statistics"></i>
                        <h3>Business Growth</h3>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                        <a class="default-btn" href="services-details.html">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-box single-box-2 bg-5">
                        <i class="flaticon-creativity"></i>
                        <h3>Strategy Process</h3>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                        <a class="default-btn" href="services-details.html">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-box single-box-2 bg-5">
                        <i class="flaticon-pie-chart"></i>
                        <h3>Best Consulting</h3>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                        <a class="default-btn" href="services-details.html">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-box single-box-2 bg-5">
                        <i class="flaticon-hand"></i>
                        <h3>Market Growth</h3>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                        <a class="default-btn" href="services-details.html">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-box single-box-2 bg-5">
                        <i class="flaticon-strategy"></i>
                        <h3>Best Services</h3>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                        <a class="default-btn" href="services-details.html">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-box single-box-2 bg-6">
                        <i class="flaticon-mortarboard"></i>
                        <h3>Finance Manage</h3>
                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
                        <a class="default-btn" href="services-details.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="best-services-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>What We do</span>
                <h2>Our Best Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-area">
                        <ul class="nav nav-pills d-sm-flex d-block text-center justify-content-between pt-15" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <i class="flaticon-steering-wheel"></i>
                                <a class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">
                                    <i class="flaticon-pie-chart"></i>
                                    Best Consulting
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-2-tab" data-bs-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
                                    <i class="flaticon-hand"></i>
                                    Market Growth
                                </a>
                            </li>
                            <li class="nav-item">
                                <i class="flaticon-tracking"></i>
                                <a class="nav-link" id="pills-3-tab" data-bs-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                                    <i class="flaticon-strategy"></i>
                                    Saving Strategy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-4-tab" data-bs-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                                    <i class="flaticon-consultant"></i>
                                    Consultant
                                </a>
                            </li>
                            <li class="nav-item">
                                <i class="flaticon-van"></i>
                                <a class="nav-link" id="pills-5-tab" data-bs-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-interview"></i>
                                    Best service
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="best-service-img">
                                        <img src="{{asset('frontend/assets/img/best-service/4.jpg')}}" alt="Service">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="best-service-area">
                                        <h3>Solution For Your Financial help</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <ul>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Investment Service
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Advisory Finance
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Global SME Finance Facility
                                            </li>
                                        </ul>
                                        <a class="default-btn" href="services-details.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="best-service-area">
                                        <h3>Solution For Your Finanacial help</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <ul>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Investment Service
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Advisory Finance
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Global SME Finance Facility
                                            </li>
                                        </ul>
                                        <a class="default-btn" href="services-details.html">Discover More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="best-service-img">
                                        <img src="{{asset('frontend/assets/img/best-service/3.jpg')}}" alt="Service">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="best-service-img">
                                        <img src="{{asset('frontend/assets/img/best-service/1.jpg')}}" alt="Service">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="best-service-area">
                                        <h3>Solution For Your Finanacial help</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <ul>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Investment Service
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Advisory Finance
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Global SME Finance Facility
                                            </li>
                                        </ul>
                                        <a class="default-btn" href="services-details.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="best-service-area">
                                        <h3>Solution For Your Finanacial help</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <ul>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Investment Service
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Advisory Finance
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Global SME Finance Facility
                                            </li>
                                        </ul>
                                        <a class="default-btn" href="services-details.html">Discover More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="best-service-img">
                                        <img src="{{asset('frontend/assets/img/best-service/2.jpg')}}" alt="Service">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="best-service-img">
                                        <img src="{{asset('frontend/assets/img/best-service/1.jpg')}}" alt="Service">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="best-service-area">
                                        <h3>Solution For Your Finanacial help</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <ul>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Investment Service
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SME Finance Advisory Finance
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Global SME Finance Facility
                                            </li>
                                        </ul>
                                        <a class="default-btn" href="services-details.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Pricing Table</span>
                <h2>Choose Pricing Packages</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-pricing">
                        <h3>Standard Plan</h3>
                        <i class="money-bag flaticon-money-bag"></i>
                        <div class="pricing-wrap">
                            <span>$550<sub>/Month</sub></span>
                            <ul>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Advanced Analysis
                                </li>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Strategy & Marketing
                                </li>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Corporate Finance
                                </li>
                            </ul>
                            <a class="default-btn" href="#">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-pricing">
                        <h3>Premium Plan</h3>
                        <i class="money-bag flaticon-money-bag"></i>
                        <div class="pricing-wrap">
                            <span>$570<sub>/Month</sub></span>
                            <ul>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Advanced Analysis
                                </li>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Strategy & Marketing
                                </li>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Corporate Finance
                                </li>
                            </ul>
                            <a class="default-btn" href="#">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-pricing">
                        <h3>Commercial</h3>
                        <i class="money-bag flaticon-money-bag"></i>
                        <div class="pricing-wrap">
                            <span>$990<sub>/Month</sub></span>
                            <ul>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Advanced Analysis
                                </li>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Strategy & Marketing
                                </li>
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    Corporate Finance
                                </li>
                            </ul>
                            <a class="default-btn" href="#">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
