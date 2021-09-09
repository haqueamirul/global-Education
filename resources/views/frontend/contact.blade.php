@extends('layouts.frontend_app')

@section('content')

    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="{{URL::to('/')}}">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="contact-box pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-map-marker"></i>
                        <div class="content-title">
                            <h3>Address</h3>
                            <p>32 st Kilda Road, Melbourne <br> VIC, 3004 Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-envelope"></i>
                        <div class="content-title">
                            <h3>Email</h3>
                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#2149444d4d4e61514453540f424e4c"><span class="__cf_email__" data-cfemail="89e1ece5e5e6c9f9ecfbfca7eae6e4">[email&#160;protected]</span></a>
                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#60090e060f20100512154e030f0d"><span class="__cf_email__" data-cfemail="ec85828a83ac9c899e99c28f8381">[email&#160;protected]</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box">
                        <i class="fa fa-phone"></i>
                        <div class="content-title">
                            <h3>Phone</h3>
                            <a href="tel:+123(456)123">+123(456)123</a>
                            <a href="tel:+123(456)124">+123(456)124</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Drop us a message for any query</h2>
                <p>If you have an idea, we would love to hear about it.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn btn-two">
                                        <span class="label">Send Message</span>
                                        <i class='bx bx-plus'></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.6536488558845!2d144.96688901584503!3d-37.82158084226482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b100a8ecad%3A0x23d6b39c78b60b3a!2s32%20St%20Kilda%20Rd%2C%20Southbank%20VIC%203006%2C%20Australia!5e0!3m2!1sen!2sbd!4v1611867308285!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
