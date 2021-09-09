@extends('layouts.frontend_app')

@section('content')

    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>About</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/')}}">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="about-us-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-title">
                        <span>About Us</span>
                        <h2>We provide total Business Solutions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gda. Risus commodo viverra maecenas accumsan.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ratione error voluptatum recusandae repellendus culpa dolorum sequi.</p>
                        <ul class="mb-0">
                            <li>
                                <i class="flaticon-right-arrow"></i>
                                Premium Service Beyond you
                            </li>
                            <li>
                                <i class="flaticon-right-arrow"></i>
                                Set a Like this Photo
                            </li>
                            <li>
                                <i class="flaticon-right-arrow"></i>
                                Premium Service beyond you
                            </li>
                            <li>
                                <i class="flaticon-right-arrow"></i>
                                A wonderful Serenity
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-img">
                        <img src="{{asset('frontend/assets/img/about-1.jpg')}}" alt="About Us">
                        <div class="about-img-2">
                            <img src="{{asset('frontend/assets/img/about-2.jpg')}}" alt="About Us">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="financial-area owl-carousel owl-theme">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="financial-image bg-1">
                        <img src="{{asset('frontend/assets/img/financial/1.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="financial-text">
                        <div class="icon">
                            <i class="flaticon-development"></i>
                        </div>
                        <h3>Project Management</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <a href="#" class="default-btn">Learn More <span></span></a>
                        <div class="shape">
                            <img src="{{asset('frontend/assets/img/shape/2.png')}}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="financial-image bg-2">
                        <img src="{{asset('frontend/assets/img/financial/2.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="financial-text">
                        <div class="icon">
                            <i class="flaticon-interview"></i>
                        </div>
                        <h3>Financial Planning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <a href="#" class="default-btn">Learn More <span></span></a>
                        <div class="shape">
                            <img src="{{asset('frontend/assets/img/shape/2.png')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Team Member</span>
                <h2>Our Expert Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/img/team/1.jpg')}}" alt="">
                            <ul class="team-icon">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-text">
                            <h3>Alvin Pillar</h3>
                            <span>SR.Product Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/img/team/2.jpg')}}" alt="">
                            <ul class="team-icon">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-text">
                            <h3>Frazer Diamond</h3>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/img/team/3.jpg')}}" alt="">
                            <ul class="team-icon">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-text">
                            <h3>Frazer Diamond</h3>
                            <span>SR.Product Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="{{asset('frontend/assets/img/team/4.jpg')}}" alt="">
                            <ul class="team-icon">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-text">
                            <h3>Denial Peterson</h3>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="client-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Press Coverage</span>
                <h2>What Our Client Say</h2>
            </div>
            <div class="row align-items-center client-bg">
                <div class="col-lg-6 p-0">
                    <div class="client-img">
                        <img src="{{asset('frontend/assets/img/client-img/client-img.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="client-details-wrap owl-carousel owl-theme">
                        <div class="client-details">
                            <img src="{{asset('frontend/assets/img/client-img/1.jpg')}}" alt="">
                            <h3>Ashik Avik</h3>
                            <span>Developer</span>
                            <i class="flaticon-quote"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus viverra maecenas accumsan lacus vel facilisis.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="client-details">
                            <img src="{{asset('frontend/assets/img/client-img/1.jpg')}}" alt="">
                            <h3>Ashik Avik</h3>
                            <span>Developer</span>
                            <i class="flaticon-quote"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus viverra maecenas accumsan lacus vel facilisis.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="client-details">
                            <img src="{{asset('frontend/assets/img/client-img/1.jpg')}}" alt="">
                            <h3>Ashik Avik</h3>
                            <span>Developer</span>
                            <i class="flaticon-quote"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus viverra maecenas accumsan lacus vel facilisis.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
