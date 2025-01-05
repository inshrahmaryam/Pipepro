@extends('layouts.main')
@section('title', 'About Us')
@section('main-container')
    <!-- Header Area End -->
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb__area" style="background-image: url('frontend/assets/img/shape/breadcrumb.jpg');">
        <div class="container">
            <div class="row ai-center">
                <div class="col-lg-6">
                    <div class="breadcrumb__area-title">
                        <h1>About Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 lg-mt-20">
                    <div class="breadcrumb__area-meta t-right lg-t-left">
                        <ul>
                            <li><a href="index-2.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    <!-- Breadcrumb Area End -->
    <!-- Solutions Area Start -->
    <div class="solutions__area section-padding">
        <div class="container">
            <div class="row ai-center">
                <div class="col-lg-8 lg-mb-30 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="solutions__area-left">
                        <h2>Your Plumbing Solutions, Our Expertise</h2>
                        <p>Plumbers provide essential services to install, repair, and maintain plumbing systems in residential and commercial properties. They work on pipes, fixtures, water heaters, and drainage systems.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".5s">
                    <div class="solutions__area-right">
                        <h2><span class="counter">25</span>+</h2>
                        <h5>Services we provide</h5>
                    </div>
                </div>
            </div>
            <div class="row mb-60">
                <div class="col-lg-3 col-sm-6 mt-35 wow fadeInUp" data-wow-delay=".3s">
                    <div class="counter__two-item">
                        <h2><span class="counter">150</span>+</h2>
                        <span>Team members</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-35 wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter__two-item">
                        <h2><span class="counter">100</span>+</h2>
                        <span>Winning awards</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-35 wow fadeInUp" data-wow-delay=".7s">
                    <div class="counter__two-item">
                        <h2><span class="counter">700</span>+</h2>
                        <span>Completed projects</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-35 wow fadeInUp" data-wow-delay=".9s">
                    <div class="counter__two-item">
                        <h2><span class="counter">684</span>+</h2>
                        <span>Client reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solutions Area End -->
    <!-- Work Process Area Start -->
    <div class="work-process section-padding pt-0">
        <div class="container">
            <div class="row mb-40">
                <div class="col-xl-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="work__process-title">
                        <h2>Expanded compatibility with various platforms</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="work__process-item">
                        <img class="shape" src="frontend/assets/img/shape/border.svg" alt="border">
                        <div class="work__process-item-icon">
                            <span>01</span>
                            <img src="frontend/assets/img/icon/process-1.svg" alt="icon">
                        </div>
                        <h3>Drip Detectives</h3>
                        <p>Plumbers provide essential services to install, repair, and maintain plumbing systems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="work__process-item two">
                        <img class="shape" src="frontend/assets/img/shape/border.svg" alt="border">
                        <div class="work__process-item-icon">
                            <span>02</span>
                            <img src="frontend/assets/img/icon/process-2.svg" alt="icon">
                        </div>
                        <h3>Leak Stop Specialists</h3>
                        <p>Plumbers provide essential services to install, repair, and maintain plumbing systems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="work__process-item three">
                        <div class="work__process-item-icon">
                            <span>03</span>
                            <img src="frontend/assets/img/icon/process-3.svg" alt="icon">
                        </div>
                        <h3>Pipe Dream Team</h3>
                        <p>Plumbers provide essential services to install, repair, and maintain plumbing systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Process Area End -->
    <!-- Cta Area Start -->
    <div class="cta__one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta__one-area">
                        <div class="row ai-center">
                            <div class="col-xl-6 col-lg-7 lg-mb-30">
                                <div class="cta__one-area-content wow fadeInLeft" data-wow-delay=".3s">
                                    <h2 class="lg-t-center">Feel Free To Contact Us for This Service</h2>
                                    <div class="cta__one-area-content-tel lg-jc-center">
                                        <div class="icon">
                                            <i class="fa-regular fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <span>For Any Help</span>
                                            <h4><a href="tel:+450570658567">+923065469221</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="cta__one-form wow fadeInRight" data-wow-delay=".5s">
                                    <form action="#">
                                        <input type="email" name="email" placeholder="Enter Your Email">
                                        <button class="button-5" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Area End -->
    <!-- Work Area Start -->
    <div class="work__area section-padding">
        <div class="container">
            <div class="row ai-center">
                <div class="col-xl-7 xl-mb-30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="work__area-left">
                        <div class="work__area-content">


						<h2>Celebrating Our Outstanding Achievements</h2>
<p>We are proud of the incredible milestones we have achieved through dedication and hard work. From groundbreaking projects to exceeding client expectations, our journey has been one of continuous growth and success. We believe in pushing boundaries and setting new standards in every endeavor we undertake. Join us as we continue to redefine excellence in our industry.</p>

						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="work__area-list-item">
									<div class="icon">
										<img src="frontend/assets/img/icon/work-1.svg" alt="icon">
									</div>
									<div class="content">
										<h3><span class="counter">580</span></h3>
										<p>Successful Project</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="work__area-list-item">
									<div class="icon">
										<img src="frontend/assets/img/icon/process-2.svg/icon/work-2.svg" alt="icon">
									</div>
									<div class="content">
										<h3><span class="counter">781</span></h3>
										<p>Satisfied Customer</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="work__area-list-item">
									<div class="icon">
										<img src="frontend/assets/img/icon/process-2.svg/icon/work-3.svg" alt="icon">
									</div>
									<div class="content">
										<h3><span class="counter">534</span></h3>
										<p>Customer Review</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="work__area-list-item">
									<div class="icon">
										<img src="frontend/assets/img/icon/process-2.svg/icon/work-4.svg" alt="icon">
									</div>
									<div class="content">
										<h3><span class="counter">100</span></h3>
										<p>Award Winning</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 xl-t-center wow fadeInUp" data-wow-delay=".9s">
					<img src="frontend/assets/img/pages/work.png" alt="image">
				</div>
			</div>
		</div>
	</div>
	<!-- Work Area End -->
	<!-- Pricing Plan Area Start -->
	<div class="pricing__one section-padding">
		<div class="container">
			<div class="row mb-20 ai-end">
				<div class="col-lg-7 wow fadeInLeft" data-wow-delay=".3s">
					<h2>Affordable Solutions for Every Home</h2>
				</div>
				<div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
					<p>It's never been easier to create a beautiful and functional website. zohatic provides you with everything</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="pricing__one-item">
						<div class="pricing__one-item-title">
							<h3>Basic</h3>
							<h2>$19<span> /mo</span></h2>
						</div>
						<div class="pricing__one-item-list">
							<ul>
								<li><i class="fa-solid fa-chevrons-right"></i>Custom Renovations</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Pipe Replacement</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Emergency Services (24/7)</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Fixture Installations</li>
							</ul>
						</div>
						<div class="pricing__one-item-button">
							<a class="button-5" href="contact.html">Purchase Now<i class="fa-regular fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
					<div class="pricing__one-item">
						<div class="pricing__one-item-title">
							<h3>Standard</h3>
							<h2>$39<span> /mo</span></h2>
						</div>
						<div class="pricing__one-item-list">
							<ul>
								<li><i class="fa-solid fa-chevrons-right"></i>Custom Renovations</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Pipe Replacement</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Emergency Services (24/7)</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Fixture Installations</li>
							</ul>
						</div>
						<div class="pricing__one-item-button">
							<a class="button-5" href="contact.html">Purchase Now<i class="fa-regular fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
					<div class="pricing__one-item">
						<div class="pricing__one-item-title">
							<h3>Premium</h3>
							<h2>$59<span> /mo</span></h2>
						</div>
						<div class="pricing__one-item-list">
							<ul>
								<li><i class="fa-solid fa-chevrons-right"></i>Custom Renovations</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Pipe Replacement</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Emergency Services (24/7)</li>
								<li><i class="fa-solid fa-chevrons-right"></i>Fixture Installations</li>
							</ul>
						</div>
						<div class="pricing__one-item-button">
							<a class="button-5" href="contact.html">Purchase Now<i class="fa-regular fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing Plan Area End -->
	<!-- Faq Area Start -->
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
							<!-- <p class="wow fadeInUp" data-wow-delay=".6s">He rejects pleasures to secu other greater pleasures, or else he endures pains to avoid worse pa the selection point</p> -->
						</div>
						<div class="wow fadeInUp" data-wow-delay=".9s" id="accordionExample">
                            <div class="faq__area-item">
                                <h5 class="icon" data-bs-toggle="collapse" data-bs-target="#collapseOne">How much solar energy is needed?</h5>
                                <div id="collapseOne" class="faq__area-item-body collapse show" data-bs-parent="#accordionExample">
                                    <p>It is a long established fact that a reader will be distr acted bioiiy the rea dablea content of a page when looking at its layout</p>
                                </div>
                            </div>
                            <div class="faq__area-item">
                                <h5 class="icon collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">How much solar power is enough?</h5>
                                <div id="collapseTwo" class="faq__area-item-body collapse" data-bs-parent="#accordionExample">
                                    <p>It is a long established fact that a reader will be distr acted bioiiy the rea dablea content of a page when looking at its layout</p>
                                </div>
                            </div>
                            <div class="faq__area-item">
                                <h5 class="icon collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">How many solar panels can I have?</h5>
                                <div id="collapseThree" class="faq__area-item-body collapse" data-bs-parent="#accordionExample">
                                    <p>It is a long established fact that a reader will be distr acted bioiiy the rea dablea content of a page when looking at its layout</p>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Faq Area End -->
	<!-- Subscribe Area Start -->
	<div class="subscribe__area" style="background-image: url('frontend/assets/img/pages/cta-bg.jpg');">
		<div class="container">
			<div class="row jc-center">
				<div class="col-lg-8 col-md-12">
					<div class="subscribe__area-title">
						<h1>Subscribe To Our New Newsletter</h1>
					</div>
					<div class="subscribe__area-form">
						<form action="#">
							<input type="text" name="email" placeholder="Email Address" required="">
							<button class="button-2" type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Subscribe Area End -->
	
	<!-- Footer Area End -->
	@endsection