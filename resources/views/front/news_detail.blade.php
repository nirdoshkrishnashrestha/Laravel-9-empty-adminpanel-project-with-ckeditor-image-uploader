@extends('front.layout.main')
@section('title')
{{ $news_detail->title }}
@endsection
@section('content')

<section class="container-page">
	<div class="container">
		<div class="content-page">
			<h1>{{ $news_detail->title }}</h1>
            <div class="date mb-2"><i class="far fa-calendar-alt me-2"></i>Publish Date: <span>{{ date("d M, Y", strtotime($news_detail->published_at)) }}</span></div>
			<hr>
            
			@if($news_detail->image_name == "Noimage" or $news_detail->hide == "yes")
			@else		
            <div class="page-image">	
				<img src="{{ url('uploads/news/'.$news_detail->image_name) }}" alt="{{ $news_detail->title }}"/>
            </div>
			@endif
        
			{!! $news_detail->content !!}
		</div>
	</div>
</section>

@endsection
