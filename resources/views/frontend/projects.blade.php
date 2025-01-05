@extends('layouts.main')
@section('title', 'Projects')
@section('main-container')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb__area" style="background-image: url('frontend/assets/img/shape/breadcrumb.jpg');">
		<div class="container">
			<div class="row ai-center">
				<div class="col-lg-6">
					<div class="breadcrumb__area-title">
						<h1>Projects</h1>
					</div>
				</div>
                <div class="col-lg-6 lg-mt-20">
                    <div class="breadcrumb__area-meta t-right lg-t-left">
                        <ul>
                            <li><a href="index-2.html">Home</a><i class="fa-regular fa-angle-right"></i></li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
			</div>
		</div>
	</div>       
    <!-- Breadcrumb Area End -->
	<!-- Portfolio Area Start -->
	<div class="portfolio__one section-padding-three">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="portfolio__one-item wow fadeInUp" data-wow-delay=".3s">
						<img src="frontend/assets/img/portfolio/portfolio-1.jpg" alt="image">
						<div class="portfolio__one-item-content">
							<span>Guaranteed</span>
							<h5><a href="projects-details.html">Reliable Plumbing Solutions</a></h5>
						</div>
					</div>
					<div class="portfolio__one-item wow fadeInUp" data-wow-delay=".3s">
						<img src="frontend/assets/img/portfolio/portfolio-2.jpg" alt="image">
						<div class="portfolio__one-item-content">
							<span>Professional</span>
							<h5><a href="projects-details.html">Home Repair Specialists</a></h5>
						</div>
					</div>
					<div class="portfolio__one-item wow fadeInUp" data-wow-delay=".3s">
						<img src="frontend/assets/img/portfolio/portfolio-5.jpg" alt="image">
						<div class="portfolio__one-item-content">
							<span>Dependable</span>
							<h5><a href="projects-details.html">Precision Home Repairs</a></h5>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="portfolio__one-item wow fadeInUp" data-wow-delay=".6s">
						<img src="frontend/assets/img/portfolio/portfolio-3.jpg" alt="image">
						<div class="portfolio__one-item-content">
							<span>Reliable</span>
							<h5><a href="projects-details.html">Expert Handyman Services</a></h5>
						</div>
					</div>
					<div class="portfolio__one-item wow fadeInUp" data-wow-delay=".6s">
						<img src="frontend/assets/img/portfolio/portfolio-4.jpg" alt="image">
						<div class="portfolio__one-item-content">
							<span>Efficient</span>
							<h5><a href="projects-details.html">Affordable Repair Services</a></h5>
						</div>
					</div>
					<div class="portfolio__one-item wow fadeInUp" data-wow-delay=".6s">
						<img src="frontend/assets/img/portfolio/portfolio-6.jpg" alt="image">
						<div class="portfolio__one-item-content">
							<span>Expertise</span>
							<h5><a href="projects-details.html">Plumbing and Maintenance</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio Area End -->     
	<!-- Contact Area Start -->
	<div class="contact__one section-padding pt-0">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="contact__one-area">
						<div class="row ai-center">
							<div class="col-lg-6 lg-mb-30">
								<div class="contact__one-area-left">
									<h2 class="wow fadeInUp" data-wow-delay=".4s">submit your report by Message</h2>
									<div class="info wow fadeInUp" data-wow-delay=".6s">
										<div class="info-item">
											<div class="info-item-content">
												<span>Call Now</span>
												<h5><a href="tel:+125(895)658568">+923065469221</a></h5>
											</div>
										</div>
										<div class="info-item">
											<div class="info-item-content">
												<span>Office Address</span>
												<h5><a href="https://google.com/maps" target="_blank">Gulshan Market, Multan</a></h5>
											</div>
										</div>
										<div class="info-item">
											<div class="info-item-content">
												<span>Quick Email</span>
												<h5><a href="mailto:info.help@pipepro.com">info.help@pipepro.com</a></h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="contact__one-area-right wow fadeInRight" data-wow-delay=".4s">
									<form action="#">
										<div class="row">
											<div class="col-md-6 mb-30">
												<div class="contact__form-area-item">										
													<input type="text" name="name" placeholder="Full Name" required="required">
												</div>
											</div>
											<div class="col-md-6 mb-30">
												<div class="contact__form-area-item">										
													<input type="email" name="email" placeholder="Email Address" required="required">											
												</div>
											</div>
											<div class="col-md-12 mb-30">
												<div class="contact__form-area-item">										
													<input type="text" name="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12 mb-30">
												<div class="contact__form-area-item">										
													<textarea name="message" placeholder="Message" required="required"></textarea>
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
			</div>
		</div>
	</div>
	<!-- Contact Area End -->
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
	@endsection