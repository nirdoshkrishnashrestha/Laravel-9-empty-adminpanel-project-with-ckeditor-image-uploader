@extends('front.layout.main')
@section('title')
Organization Chart
@endsection
@section('content')
<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1> {{ $org->title }} </h1>
     		
			{!! $org->content !!}
				<div class="clearfix"></div>
		</div>
	</div>
</section>
@endsection
  