@extends('front.layout.main')
@section('title')
About Us
@endsection
@section('content')

<section class="container-page">

	<div class="container">
		<div class="content-page">
			<h1>{{ $abouts->title }}</h1>
			@if($abouts->image_name == "Noimage" or $abouts->hide == "yes")
			@else
			<div class="page-image">
				<img src="{{ url('uploads/about/'.$abouts->image_name) }}" alt="Sadasya sewa"/>
			</div>
			@endif
			{!! $abouts->content !!}
		</div>
	</div>
</section>

@endsection



