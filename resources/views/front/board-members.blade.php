@extends('front.layout.main')
@section('title')
Board of Directors
@endsection

@section('content')
    
<section class="container-page">

	<div class="container">
		<div class="content-page">
	<h1>Board of Directors</h1>	
			
<div class="row">

  @if($chairman) 
<div class="col-lg-4 col-md-6">
<div class="card members-card mb-3">
  <div class="row g-0 d-flex justify-content-between align-items-center">
    <div class="col-md-4">
      @if($chairman->image_name == 'Noimage' or $chairman->hide == "yes")
		<img src="{{ url('public/front/images/sadasyasewa-rectangle-logo.png') }}" class="img-fluid rounded-start" />
		@else
      <img src=" {{url('uploads/client'.'/'.$chairman->image_name)}} " class="img-fluid rounded-start" alt="{{ $chairman->title }}">
      @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> {{ $chairman->title }}</h5>
        <p class="card-text"> {{ $chairman->url }}</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endif
			
<div class="row">
	@foreach ($bod as $member)     
<div class="col-lg-4 col-md-6">
<div class="card members-card mb-3">
  <div class="row g-0 d-flex justify-content-between align-items-center">
    <div class="col-md-4">
      @if($member->image_name == 'Noimage' or $member->hide == "yes")
      <img src="{{ url('public/front/images/sadasyasewa-rectangle-logo.png') }}" class="img-fluid rounded-start" />
      @else
      <img src="{{url('uploads/client'.'/'.$member->image_name)}}" class="img-fluid rounded-start" alt="{{ $member->title }}">
      @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> {{ $member->title }} </h5>
        <p class="card-text">{{ $member->url }}</p>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach

</div>	
			
					
		</div>
	</div>
</section>
@endsection
