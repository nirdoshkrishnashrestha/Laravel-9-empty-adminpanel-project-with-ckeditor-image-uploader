@extends('front.layout.main')
@section('title')
Contact Us
@endsection
@section('content')

<section class="container-page">
	<div class="container">
		<div class="content-page">

<div class="contact-page">
	
	<h1>Contact</h1>
	
	<div class="row">
	<div class="col-lg-4">
		<div class="col-box mb-5">
			<h2>Head Office</h2>
			
			<div class="row mb-3">
				<div class="col-lg-1 col-md-1">
				<i class="fas fa-phone"></i>
				</div>
				<div class="col-lg-11 col-md-11">
				<h5>Call Us</h5>
				<p>+977-01-<?php echo $contact[0]->phone1 ?></p>
				</div>
			</div>
			
			<div class="row mb-3">
			<div class="col-lg-1 col-md-1">
			<i class="fas fa-envelope"></i>
			</div>
			<div class="col-lg-11 col-md-11">
			<h5>Mail Us</h5>
			<p><?php echo $contact[0]->email1 ?>, <br/><?php echo $contact[0]->extra1 ?></p>
			</div>
			</div>
			
			<div class="row mb-3">
			<div class="col-lg-1 col-md-1">
			<i class="fas fa-map-marker-alt"></i>
			</div>
			<div class="col-lg-11 col-md-11">
			<h5>Visit Us</h5>
			<p><?php echo $contact[0]->address1 ?></p>
			</div>
			</div>
			
			<div class="social-bottm">

				<?php if($socials[0]->facebook != ""){ ?>
					<a href="{{ $socials[0]->facebook }}" title="Facebook" target="_blank"><i class="fab fa-facebook-f facebook"></i></a>
					<?php } if($socials[0]->twitter != ""){ ?>
					<a href="{{ $socials[0]->twitter }}" title="Twitter" target="_blank"><i class="fab fa-twitter twitter"></i></a>
					<?php } if($socials[0]->instagram != ""){ ?>
					<a href="{{ $socials[0]->instagram }}" title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in linkedin"></i></a>
					<?php } if($socials[0]->linkedin != ""){ ?>
					<a href="{{ $socials[0]->linkedin }}" title="Instagram" target="_blank"><i class="fab fa-instagram insta"></i></a>
					<?php } if($socials[0]->youtube != ""){ ?>
					<a href="{{ $socials[0]->youtube }}" title="Youtube" target="_blank"><i class="fab fa-youtube youtube"></i></a>
					
					<?php } if($socials[0]->extra1 != ""){ ?>
					<a href="https://wa.me/{{ $socials[0]->extra1 }}" title="WhatsApp" target="_blank"><i class="fab fa-whatsapp whatsapp"></i></a>
					<?php } ?>
			
			</div>
			
		</div>
	</div>
		<div class="col-lg-4">
		<div class="col-box mb-5">
			<h2>Service Center</h2>
			
			<div class="row mb-3">
				<div class="col-lg-1 col-md-1">
				<i class="fas fa-phone"></i>
				</div>
				<div class="col-lg-11 col-md-11">
				<h5>Call Us</h5>
				<p>+977-01-<?php echo $contact[0]->phone2 ?></p>
				</div>
			</div>
			
			<div class="row mb-3">
			<div class="col-lg-1 col-md-1">
			<i class="fas fa-envelope"></i>
			</div>
			<div class="col-lg-11 col-md-11">
			<h5>Mail Us</h5>
			<p><?php echo $contact[0]->email2 ?>,<br/> <?php echo $contact[0]->extra2 ?></p>
			</div>
			</div>
			
			<div class="row mb-3">
			<div class="col-lg-1 col-md-1">
			<i class="fas fa-map-marker-alt"></i>
			</div>
			<div class="col-lg-11 col-md-11">
			<h5>Visit Us</h5>
			<p><?php echo $contact[0]->address2 ?></p>
			</div>
			</div>
			
		</div>
	</div>
		
		
		
<div class="col-lg-4">		
<div class="col-box mb-5 mb-lg-0">
<h2>Inquiry</h2>
			
<form>
  
  <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Full Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="">
    </div>
  </div>
	
	<div class="row mb-3">
    <label class="col-sm-3 col-form-label">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="">
    </div>
  </div>
	<div class="row mb-3">
    <label class="col-sm-3 col-form-label">Mobile:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="">
    </div>
  </div>
	
	<div class="row mb-3">
    <label class="col-sm-3 col-form-label">Inquiry:</label>
    <div class="col-sm-9">
      <textarea name="" class="form-control" rows="3"></textarea>
    </div>
  </div>
  <div class="row"><div class="col-3"></div><div class="col-9"><button type="submit" class="btn btn-outline-primary">Send Message</button></div></div>
</form>
</div>
</div>		
</div>

</div>
</div>
</div>
		<div class="row">
		<div class="col-lg-12">
			<div class="location-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441.6404375341671!2d85.34902080246353!3d27.682577581423736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f35ad88789%3A0x922e52da32afb67e!2sSadasya%20Sewa%20SACOS!5e0!3m2!1sne!2snp!4v1650971054948!5m2!1sne!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>

@endsection
  