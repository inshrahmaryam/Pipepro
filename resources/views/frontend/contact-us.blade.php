@extends('frontend.layouts.main')
@section('title', 'contact-us')
@section('main-container')




<main class="site-main page-spacing">
		<!-- Page Banner -->
		<div class="page-banner container-fluid no-padding">
			<div class="page-banner-content">
				<h3>Contact</h3>
			</div>
		</div><!-- Page Banner /- -->

		<!-- Contact Us 2 -->
		<div class="contact-us-1 contact-us-2 container-fluid no-padding">
			<!-- Map Section -->
			<div class="map container-fluid no-padding">
				<div class="map-canvas-1" id="map-canvas-contact-1" data-lat="35.337638" data-lng="-119.041089" data-string="1905A, Brook Downtown,North California,CA 19A34 United States" data-zoom="12"></div>
			</div><!--  Map Section /- -->
			<!-- Container -->
			<div class="container">
				<div class="section-padding"></div>
				<div class="section-header">
					<h3>Our Menu</h3>
					<h5>CREAMY DISHES</h5>
					<img src="frontend/images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
					<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
				</div><!-- Section Header /-  -->
				@if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                            <strong>
                                <h1 style="color:#ffffff">{{$message}}</h1>
                            </strong>
                        </div>
                    @endif
					<form class="contact-one__form form-one fadeInUp" method="post" action="{{ url('/contact-us') }}">
                        @csrf
						<div class="form-group col-md-6 col-sm-6 col-xs-6">
						<label>Your Name</label>
						<input type="text" class="form-control" id="input_fname" name="name" placeholder="Enter Your Name*" required>
						@if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{$errors->first('name')}}
                                    </span>
                                @endif
					</div>
					<div class="form-group col-md-6 col-sm-6 col-xs-6">
						<label>Your Email</label>
						<input type="email" class="form-control" id="input_email" name="email" placeholder="Enter Your E-mail*" required>
						@if ($errors->has('email'))
                                    <span class="text-danger">
                                        {{$errors->first('email')}}
                                    </span>
                                @endif
					</div>
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
						<label>Your Subject</label>
						<input type="text" class="form-control" id="input_subject" name="subject" placeholder="Subject" required>
						@if ($errors->has('subject'))
                                    <span class="text-danger">
                                        {{$errors->first('subject')}}
                                    </span>
                                @endif
					</div>
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
						<label>Your Message</label>
						<textarea class="form-control" rows="8" id="textarea_message" name="message" placeholder="Message"></textarea>
						@if ($errors->has('message'))
                                    <span class="text-danger">
                                        {{$errors->first('message')}}
                                    </span>
                                @endif
					</div>
					<div class="form-group">
						<input type="submit" id="btn_submit" name="submit" value="Submit">
					</div>
					<div id="alert-msg" class="alert-msg"></div>
				</form>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Contact Us 2 /- -->

		<!-- Newsletter Box -->
		<div class="subscribe-section container-fluid" id="subscribe-section">
			<!-- Container -->
			<div class="container">
				<h4 class="subscribe-title col-md-5 col-sm-4 col-xs-12">subscribe to our newsletter</h4>
				<form class="col-md-7 col-sm-8 col-xs-12">
					<div class="col-md-9 col-sm-8 col-xs-8"><input type="text" placeholder="Your Email Here" name="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
					<div class="col-md-3 col-sm-4 col-xs-4 no-left-padding"><input type="submit" value="subscribe" class="btn-default"></div>
				</form>
			</div><!-- Container /- -->
		</div><!-- Newsletter Box /- -->
	</main>



@endsection



