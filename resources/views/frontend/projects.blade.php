@extends('layouts.frontend_app')

@section('content')

    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Projects</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/')}}">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="project-area pt-100 pb-70">
        <div class="container">
            <div class="sorting-menu">
                <ul>
                    <li class="filter active" data-filter="all">All</li>
                    <li class="filter" data-filter=".1">Business</li>
                    <li class="filter" data-filter=".2">Development</li>
                    <li class="filter" data-filter=".3">Finance</li>
                    <li class="filter" data-filter=".4">Growth</li>
                    <li class="filter" data-filter=".5">Marketing</li>
                </ul>
            </div>

            <div id="Container" class="row">
                <div class="single-portfolio-item col-lg-4 col-sm-6 1 5 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/1.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Business Management</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 2 3 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/2.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Fund Management</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 3 5 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/3.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Data Analytics</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 4 1 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/4.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Revenue Growth</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 5 2 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/5.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Market Expansion</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 1 3 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/6.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Construction</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 3 1 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/7.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Audit and Evaluation</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 1 2 3 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/8.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Consumer Products</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-item col-lg-4 col-sm-6 1 5 3 mix">
                    <div class="portfolio-inner">
                        <img class="portfolio-img" src="{{asset('frontend/assets/img/project/9.jpg')}}" alt="portfolio-img">
                        <div class="portfolio-hover">
                            <div class="hover-text">
                                <a href="portfolio-details.html">
                                    <h4>Digital Analysis</h4>
                                    <span>business</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
