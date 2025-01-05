@extends('layouts.main')
@section('title', 'Contact')
@section('main-container')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb__area" style="background-image: url('frontend/assets/img/shape/breadcrumb.jpg');">
        <div class="container">
            <div class="row ai-center">
                <div class="col-lg-6">
                    <div class="breadcrumb__area-title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 lg-mt-20">
                    <div class="breadcrumb__area-meta t-right lg-t-left">
                        <ul>
                            <li><a href="index-2.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    <!-- Breadcrumb Area End -->

    <!-- Contact Area Start -->
    <div class="contact__page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 lg-mb-30 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="contact__page-left">
                        <img src="frontend/assets/img/pages/contact.jpg" alt="image">
                        <div class="info">
                            <div class="info-item">
                                <div class="info-item-icon">
                                    <i class="fal fa-phone-alt icon-animation"></i>
                                </div>
                                <div class="info-item-content">
                                    <span>Call Now</span>
                                    <h6><a href="tel:+923065469221">+923065469221</a></h6>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="info-item-content">
                                    <span>Quick Email</span>
                                    <h6><a href="mailto:info.help@pipepro.com">info.help@pipepro.com</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                    <div class="contact__page-right">
                        <h2>Get in Touch</h2>
                        <form action="{{ route('contact_submit_record') }}" method="post" class="site-form site-form-style-two p-0 position-relative">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="contact__form-area-item">                                        
                                        <input type="text" name="name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__form-area-item">                                        
                                        <input type="email" name="email" placeholder="Email Address" required>                                            
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__form-area-item">                                        
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__form-area-item">                                        
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact__form-area-item">
                                        <button class="button-1" type="submit">Submit Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- FAQ Area Start -->
    <div class="faq__one section-padding pt-0">
        <div class="container">
            <div class="row ai-end">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="faq__one-image">
                        <img src="frontend/assets/img/pages/faq.png" alt="image">
                        <img class="shape left-right-animate" src="frontend/assets/img/shape/faq-shape.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 lg-mt-30">
                    <div class="faq__one-right">
                        <div class="faq__one-right-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Ask Question</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".9s" id="accordionExample">
                            <div class="faq__area-item">
                                <h5 class="icon" data-bs-toggle="collapse" data-bs-target="#collapseOne">How much solar energy is needed?</h5>
                                <div id="collapseOne" class="faq__area-item-body collapse show" data-bs-parent="#accordionExample">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <div class="faq__area-item">
                                <h5 class="icon collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">How much solar power is enough?</h5>
                                <div id="collapseTwo" class="faq__area-item-body collapse" data-bs-parent="#accordionExample">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <div class="faq__area-item">
                                <h5 class="icon collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">How many solar panels can I have?</h5>
                                <div id="collapseThree" class="faq__area-item-body collapse" data-bs-parent="#accordionExample">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Area End -->

    <!-- Subscribe Area Start -->
    <div class="subscribe__area" style="background-image: url('frontend/assets/img/pages/cta-bg.jpg');">
        <div class="container">
            <div class="row jc-center">
                <div class="col-lg-8 col-md-12">
                    <div class="subscribe__area-title">
                        <h1>Subscribe To Our New Newsletter</h1>
                    </div>
                    <div class="subscribe__area-form">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Email Address" required>
                            <button class="button-2" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
@endsection
