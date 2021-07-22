
@extends('layouts.app')
@section('title', 'Contact Us')
@section('style')
    <style>


    </style>
@endsection
@section('content')


    <section>
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>You can contact us on:</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-primary d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p><span>Address:</span>WCN After fatigue guest house, off Offa Ajase-ipo road, Ijagbo, Kwara State.</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-primary d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p><span>Phone:</span> <a href="tel://1234567920">+2348068779877</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-primary d-flex align-items-center justify-content-center">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="text">
										<p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon bg-primary d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text">
										<p><span>Website</span> <a href="#">livingwordea.org</a></p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
                <div class="col-md-7">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Contact Us</h3>
                        <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="#">Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-dark">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    </section>
@endsection
@section('script')
    <script>


    </script>
@endsection
