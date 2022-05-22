<section class="top-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<span class="me-2"><strong>Reg. No.:</strong> {{ $details->registration }} </span>
			</div>
			<div class="col-lg-6 col-md-6">
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
	</div>
</section>