@extends('front.layout.main')
@section('title')
Our Team
@endsection
@section('content') 

<section class="container-page">
	<div class="heading-block">
		<div class="container">
		<h1>Our Team</h1>
		</div>
	</div>
	<div class="container">
		<div class="content-page">
			

<div class="row">
<div class="col-lg-2 col-md-4 offset-lg-5 offset-md-4">	

<div class="team-chairman">
	<div class="team-photo">
		@if($team->hide == "yes" or $team->image_name == "Noimage")
				<img src="{{ url('public/front/images/logo.jpg') }}" />
				@else
		<img src="{{ url('uploads/team/'.$team->image_name) }}" alt="Sadasya Sewa Saving & Credit Co-Operative Ltd {{ $team->designation }}"/>
		@endif
	</div>
		<strong>{{ $team->title }}</strong><br>
		{{ $team->designation }}
</div>
</div>
</div>
			
	<div class="team-member-wrapper">
		@foreach ($teams as $item)
		<div class="team-member">
			<div class="team-photo">
				@if($item->hide == "yes" or $item->image_name == "Noimage")
				<img src="{{ url('public/front/images/logo.jpg') }}" />
				@else
			<img src="{{ url('uploads/team/'.$item->image_name) }}" alt="Sadasya Sewa Saving & Credit Co-Operative Ltd {{ $item->designation }}"/>
			@endif
			</div>
			<strong>{{ $item->title }}</strong><br>
			{{ $item->designation }}
		</div>
		@endforeach
		
	</div>		
			
		
		</div>
	</div>
</section>
  
@endsection
