@extends('front.layout.main')
@section('title')
{{ $service->title }}
@endsection
@section('content')

<section class="container-page">

	<div class="container">
		<div class="content-page">
			<h1>{{ $service->title }}</h1>
			@if($service->image_name == "Noimage" or $service->hide == "yes")
			@else
			<div class="page-image">
				<img src="{{ url('uploads/about/'.$service->image_name) }}" alt="Sadasya sewa"/>
			</div>
			@endif
			{!! $service->content !!}
		</div>
	</div>
</section>

@endsection
  