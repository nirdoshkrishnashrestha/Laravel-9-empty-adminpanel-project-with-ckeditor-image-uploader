
<section class="bottom-link">
	<div class="container">
	  <div class="bottomlink-logo"><img src=" {{ url('public/front/images/sadasyasewa-square-logo.png') }} " alt="Sadasya Sewa Saving & Co-operative Ltd."/></div>
		<hr class="bg-light mt-4">
<div class="row">
		

			<div class="col-lg-3 mb-4 mb-lg-0">
			<span class="title-head">Head Office</span><br>
			<i class="fas fa-map-marker-alt"></i> {{$details->address1}} <br>
			<i class="fas fa-phone-alt"></i>+977-1-{{$details->phone1}}<br>
			<i class="fas fa-envelope"></i>{{$details->email1}}<br>
			<i class="fas fa-envelope"></i>{{$details->extra1}}
			</div>
			<div class="col-lg-3 mb-4 mb-lg-0">
			<span class="title-head">Service Center</span><br>
			<i class="fas fa-map-marker-alt"></i>{{$details->address2}}<br>
			<i class="fas fa-phone-alt"></i>+977-1-{{$details->phone2}}<br>
			<i class="fas fa-envelope"></i>{{$details->email2}}<br>
			<i class="fas fa-envelope"></i>{{$details->extra2}}
			</div>

		
	  <div class="col-lg-3 mb-4 mb-lg-0">
			<span class="title-head">About Us</span>

			@foreach ($about_menu as $about)
			<li><a href="{{ url('about/'.$about->slug) }}">{{ $about->title }}</a></li>
			@endforeach		

			<li><a href="{{ url('about/board-of-directors') }}">Board of Directors</a></li>
            <li><a href="{{ url('about/management-team') }}">Management Team</a></li>
		</div>
	  <div class="col-lg-3">
			<span class="title-head">Quick Links</span>
			<li><a href=" {{url('/')}} ">Home</a></li>
			<li><a href="{{url('/news-notice')}}">News / Notices</a></li>
			<li><a href="{{url('/gallery')}}">Gallery</a></li>
			<li><a href="{{url('/contact')}}">Contact</a></li>
	  </div>
	</div>
	</div>
</section>