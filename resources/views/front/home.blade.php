@extends('front.layout.main')
@section('title')
Home Page
@endsection
@section('content') 

<section class="slider-banner">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
	  	@php
		  $shw = 1;
		@endphp
	  @foreach ($banners as $banner)
	  
	  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $shw-1 }}" @if($shw == 1) 
	  class="active" aria-current="true" @endif aria-label="Slide {{ $shw }}"></button>
	  @php
		  $shw++;
	  @endphp
	  @endforeach

  </div>
  <div class="carousel-inner">
	 @php
		 $cnt = 1;
	 @endphp
	  @foreach ($banners as $banner) 
	<div class="carousel-item @if($cnt == 1) active @endif ">
      <img src=" {{ url('uploads/banner/'.$banner->image_name) }}  " class="d-block w-100" alt="{{ $banner->title }}">
    </div>
	@php
		$cnt++;
	@endphp
	  @endforeach
	
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section class="welcome">
<div class="container">
<div class="row d-flex justify-content-between align-items-center">
<div class="col-lg-8 col-md-12">
<div class="welcome-txt">
<h1>{!! $home[0]->title !!}</h1>
	<h4>Sadasya Sewa Saving & Credit Co-operative Ltd.</h4>
	<hr>
{!! $home[0]->content !!}
<a href=" {{url('about/our-profile')}} " class="btn btn-outline-primary" role="button"><i class="fas fa-bars me-1"></i> Read More</a>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="welcome-img">
	<img src="{{ url('public/front/images/sadasyasewa-square-logo.png') }}" alt="Sadasya Sewa Saving & Credit Co-operative Ltd."/>
</div>
</div>
</div>
</div>
</section>

<section class="vmo-chairman">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<div class="vmo-col">
					<div class="row">
						<div class="col-lg-2">
							<div class="vmo-icon">
								<i class="far fa-eye icon"></i>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="vmo-text">
								<h1>{!! $home[1]->title !!}</h1>
								{!! $home[1]->content !!}
							</div>
						</div>
					</div>
				</div>
				<div class="vmo-col">
					<div class="row">
						<div class="col-lg-2">
							<div class="vmo-icon">
								<i class="fas fa-rocket icon"></i>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="vmo-text">
								<h1>{!! $home[2]->title !!}</h1>
								{!! $home[2]->content !!}
							</div>
						</div>
					</div>
				</div>
				<div class="vmo-col">
					<div class="row">
						<div class="col-lg-2">
							<div class="vmo-icon">
								<i class="fas fa-chart-line icon"></i>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="vmo-text">
								<h1>{!! $home[3]->title !!}</h1>
								{!! $home[3]->content !!}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="chairman">
				  <h1>{!! $home[4]->title !!}</h1>
					<div class="ch-img">
						<img src=" {{ url('uploads/homepage/'.$home[4]->image_name) }}" alt=""/>
					</div>

{!! $home[4]->content !!}
						
				</div>
			</div>
		</div>
	</div>
</section>

<!----------------------------------Services Start----------------------->
	  
	  <section class="services-home">
		  <div class="container">
			  
			  <h1><span>Our</span><br>
Services</h1>
			  
			  <div class="row">
					<div class="col-lg-4 mb-5 mb-lg-0">
						<a href="{{url('service/'.$mobile_service->slug)}}">
							<div class="services-col h-100">
							<center>
							  <img class="icon" src=" {{ url('uploads/homepage/'.$home[5]->image_name) }} " alt=""/>
                            </center>
							<h2>{!! $home[5]->title !!}</h2>
							{!! $home[5]->content !!}
							<button type="button" class="btn btn-outline-primary"><i class="fas fa-align-justify"></i> Read More</button>
								
						</div>
						</a>
					</div>
				  <div class="col-lg-4 mb-5 mb-lg-0">
						<a href="{{url('service/'.$deposit_service->slug)}}">
							<div class="services-col h-100">
							<center>
							  <img class="icon" src="{{ url('uploads/homepage/'.$home[6]->image_name) }}" alt=""/>
                            </center>
							<h2>{!! $home[6]->title !!}</h2>
							{!! $home[6]->content !!}
							<button type="button" class="btn btn-outline-primary"><i class="fas fa-align-justify"></i> Read More</button>
						</div>
						</a>
					</div>
				  <div class="col-lg-4">
						<a href="{{url('service/'.$loan_service->slug)}}">
							<div class="services-col h-100">
							<center>
							  <img class="icon" src="{{ url('uploads/homepage/'.$home[7]->image_name) }}" alt=""/>
                            </center>
							<h2>{!! $home[7]->title !!}</h2>
							{!! $home[7]->content !!}
							<button type="button" class="btn btn-outline-primary"><i class="fas fa-align-justify"></i> Read More</button>
						</div>
						</a>
					</div>
				</div>
			  
		  </div>
	  </section>
	  
<!---------------------------------- Services End ----------------------->


<section class="how-work">
		  <div class="container">
			  
			  <h1><span>Easy Loan Processing</span><br>
						Steps !</h1>
			  <hr class="bg-light">
			  <div class="row">
				  <div class="col-lg-3">
				  <div class="work-process">
						  <div class="row">
						  <div class="col-lg-2 col-md-1">
							  <div class="process-number">
								  1
							  </div>
						  </div>
						  <div class="col-lg-10 col-md-11">
							  <div class="process">
								  <h2>{!! $home[8]->title !!}</h2>
								  {!! $home[8]->content !!}
							  </div>
						  </div>
					  	</div>
					  </div>
				  </div>
				  <div class="col-lg-3">
				  <div class="work-process">
						  <div class="row">
						  <div class="col-lg-2 col-md-1">
							  <div class="process-number">
								  2
							  </div>
						  </div>
						  <div class="col-lg-10 col-md-11">
							  <div class="process">
								  <h2>{!! $home[9]->title !!}</h2>
								  {!! $home[9]->content !!}
							  </div>
						  </div>
					  	</div>
					  </div>
				  </div>
				  <div class="col-lg-3">
				  <div class="work-process">
						  <div class="row">
						  <div class="col-lg-2 col-md-1">
							  <div class="process-number">
								  3
							  </div>
						  </div>
						  <div class="col-lg-10 col-md-11">
							  <div class="process">
								  <h2>{!! $home[10]->title !!}</h2>
								  {!! $home[10]->content !!}
							  </div>
						  </div>
					  	</div>
					  </div>
				  </div>
				  <div class="col-lg-3">
				  <div class="work-process">
						  <div class="row">
						  <div class="col-lg-2 col-md-1">
							  <div class="process-number">
								  4
							  </div>
						  </div>
						  <div class="col-lg-10 col-md-11">
							  <div class="process">
								  <h2>{!! $home[11]->title !!}</h2>
								  {!! $home[11]->content !!}
							  </div>
						  </div>
					  	</div>
					  </div>
				  </div>

			  </div>
			  <hr class="bg-light">
		  </div>
	  </section>


<section class="download-home">
	<div class="container">
		<div class="download-home-col">
			<div class="row d-flex align-items-center">
				<div class="col-lg-5">
					<h1>{!! $home[12]->title !!}</h1>
					{!! $home[12]->content !!}
				</div>
				<div class="col-lg-7 mt-5 mt-lg-0">
					<div class="row">
						<div class="col-lg-4 col-md-4 mb-5 mb-lg-0">
							<a href="download/form-sample.pdf" target="_blank"><i class="fas fa-file-alt download-icons"></i>
							<h3>New Account Form</h3></a>
							
						</div>
						<div class="col-lg-4 col-md-4 mb-5 mb-lg-0">
							<a href="{{ url('uploads/team/'.$brochure->image_name) }}" target="_blank"><i class="fas fa-file-invoice download-icons"></i>
							<h3>Brochure</h3></a>							
							
						</div>
						<div class="col-lg-4 col-md-4 mb-5 mb-lg-0">
							<a href="{{ url('report') }}"><i class="fas fa-file-pdf download-icons"></i>
							<h3>Annual Reports</h3></a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	  

<section class="counter-profile">
<div class="container">
	<div id="counter">
		<h1><span>Performance in</span><br>
Numbers</h1>
    <div class="row">
		<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
			<div class="counter-icons"><i class="fas fa-coins"></i></div>
			<div class="counter-value" data-count=" {{$details->capital}} "></div>
			<span class="counter-value">+</span>
			<div class="counter-text">Capital in Million</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
			<div class="counter-icons"><i class="fas fa-users"></i></div>
			<div class="counter-value" data-count=" {{$details->customer}} "></div>
			<span class="counter-value">+</span>
			<div class="counter-text">Customers</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
			<div class="counter-icons"><i class="fas fa-user-tie"></i></div>
			<div class="counter-value" data-count="{{$details->employee}}"></div>
			<span class="counter-value">+</span>
			<div class="counter-text">Employees</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
			<div class="counter-icons"><i class="far fa-calendar-alt"></i></div>
			<div class="counter-value" data-count="{{$details->experience}}"></div>
			<span class="counter-value">+</span>
			<div class="counter-text">Years</div>
		</div>
	</div>
</div>
</div>
</section>
	  
<section class="testimonials">
<div class="container">	
<center>
			  <h1><span>customers</span><br>
Testimonial</h1>
</center>
	
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">

				@foreach ($testimonials as $testimonial)				

                <div class="testimonial">
					<div class="pic">
					<div class="testi-pic">
						@if($testimonial->image_name == NULL or $testimonial->hide == "yes")
						<img src="{{ url('public/front/images/sadasyasewa-square-small-logo.png') }}" />
						@else
						<img src=" {{ url('uploads/testimonial').'/'.$testimonial->image_name }} ">
						@endif
					</div>
					</div>
					<div class="testimonial-profile">
						<h3 class="title">{{ $testimonial->name }}</h3>
						<span class="post">{{ $testimonial->country }}</span>
					</div>
					<div>
						{!! $testimonial->content !!}
					</div>
					
				</div>
 				@endforeach

            </div>
        </div>
    </div>
	</div>
</section>

<section class="news-notices">
		<div class="container">
			<center>
	<h1>News / Notices</h1>
	</center>
	<div class="row">

		@foreach ($news as $new)		
		<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
			<a href="{{url('news'.'/'.$new->slug)}}">
				<div class="news-box h-100">
					<div class="news-box-image">
						@if($new->image_name == NULL or $new->hide == "yes")
						<img src="{{ url('public/front/images/sadasyasewa-rectangle-logo.png') }}" />
						@else
						<img src=" {{ url('uploads/news'.'/'.$new->image_name) }} " alt=" {{$new->title}} "/>
						@endif					
					</div>
					<h2>{!! $new->title !!}</h2>
					<span class="news-date"><i class="far fa-calendar-alt"></i> 
						{{ date("d M, Y", strtotime($new->published_at)) }}
					</span>
				</div>
			</a>
		</div>
		@endforeach
	</div>
			<a href="{{url('/news-notice')}}" class="btn btn-outline-primary mt-4" role="button"><i class="fas fa-bars me-1"></i> View All</a>
		</div>
	</section>


@endsection
