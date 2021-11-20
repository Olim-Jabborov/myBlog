@extends('layout')

@section('title')
    Contact
@endsection

@section('main_content')

<!-- ======= Contact Section ======= -->

<div id="contact" class="contact">
  <div class="container">

	<div class="section-title my-5" style="text-align: center">
	  <h2>Contact</h2>
	  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
	</div>

	<div class="row contact-info mt-5">

	  <div class="col-md-3">
		<div class="contact-address mt-3" style="text-align: center">
		  <i class="material-icons bi bi-geo-alt md-48 text-success"></i>
		  <h3>Address</h3>
		  <address>A108 Adam Street, NY 535022, USA</address>
		</div>
	  </div>

	  <div class="col-md-3">
		<div class="open-hours mt-3" style="text-align: center">
		  <i class="material-icons bi bi-clock md-48 text-success"></i>
		  <h3>Open Hours:</h3>
		  <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
		</div>
	  </div>

	  <div class="col-md-3">
		<div class="contact-phone mt-3" style="text-align: center">
		  <i class="material-icons bi bi-phone md-48 text-success"></i>
		  <h3>Phone Number</h3>
		  <p>+1 5589 55488 55</p>
		</div>
	  </div>

	  <div class="col-md-3">
		<div class="contact-email mt-3" style="text-align: center">
		  <i class="material-icons bi bi-envelope md-48 text-success"></i>
		  <h3>Email</h3>
		  <p><a style="text-decoration: none; color: black" href="mailto:info@example.com">info@example.com</a></p>
		</div>
	  </div>

	</div>

	<div class="form">
	  <form method="post" role="form" class="php-email-form">
		  @csrf
		<div class="row">
		  <div class="col-md-6 form-group">
			<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
		  </div>
		  <div class="col-md-6 form-group mt-3 mt-md-0">
			<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
		  </div>
		</div>
		<div class="form-group mt-3">
		  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
		</div>
		<div class="form-group mt-3">
		  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
		</div>
<!--		<div class="my-3">-->
<!--		  <div class="loading">Loading</div>-->
<!--		  <div class="error-message"></div>-->
<!--		  <div class="sent-message">Your message has been sent. Thank you!</div>-->
<!--		</div>-->
		<div class="text-center mt-3"><button class="btn btn-outline-success" type="submit">Send Message</button></div>
	  </form>
	</div>

  </div>
</div><!-- End Contact Section -->
@endsection