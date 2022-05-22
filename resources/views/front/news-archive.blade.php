@extends('front.layout.main')
@section('title')
News
@endsection
@section('content')	  
<section class="container-page">

	<div class="container">
		<div class="content-page">
			<h1>News / Notices</h1>
			<div class="news-events-page">
				<div class="row">

                    @foreach ($news as $item)                        
					<div class="col-lg-6 mb-3">
						<div class="news-box">
							<div class="row">
								<div class="col-lg-4">
									<a href="{{url('/news'.'/'.$item->slug)}}">
										<div class="news-box-image">
                                        @if($item->image_name == NULL or $item->hide == "yes")
                                        <img src="{{ url('public/front/images/sadasyasewa-rectangle-logo.png') }}" />
                                        @else
                                <img src=" {{url('uploads/news'.'/'.$item->image_name)}} " alt="{{ $item->title }}"/>
                                        @endif    
										</div>
									</a>
								</div>
								<div class="col-lg-8">
								<h2> {{ $item->title }} </h2>
								<div class="date mb-2">Publish Date: <span>{{ date("d M, Y", strtotime($item->published_at)) }}</span></div>
								<p>{{ $item->excerpt }}</p>
								<a class="btn btn1 btn-sm" href=" {{url('/news'.'/'.$item->slug)}} " role="button"><i class="fas fa-align-justify"></i> Read More</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
				
				</div>
			</div>    
		</div>
	</div>  

</section>
@endsection