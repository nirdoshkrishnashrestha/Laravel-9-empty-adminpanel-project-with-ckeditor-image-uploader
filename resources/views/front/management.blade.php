@extends('front.layout.main')
@section('title')
Management Team
@endsection
@section('content')


<section class="container-page">

	<div class="container">
		<div class="content-page">
	<h1>Management Team</h1>	
			

<h2 style="font-size: 20px; color: #FFF; background: #004d91; float: left; margin-bottom: 25px; padding: 5px 20px 5px 10px; border-top-right-radius: 50px; border-bottom-right-radius: 50px;">Head Office, Koteshwor, Kathmandu</h2>
	<div class="clearfix"></div>		
<div class="row mb-5">

@foreach ($head as $h_mem)
<div class="col-lg-4 col-md-6">
<div class="card members-card mb-3">
  <div class="row g-0 d-flex justify-content-between align-items-center">
    <div class="col-md-4">
		@if($h_mem->image_name == 'Noimage' or $h_mem->hide == "yes")
		<img src="{{ url('public/front/images/sadasyasewa-rectangle-logo.png') }}" class="img-fluid rounded-start" />
		@else
		<img src="{{ url('uploads/management'.'/'.$h_mem->image_name) }}" class="img-fluid rounded-start" alt="{{$h_mem->title}}">
		@endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> {{$h_mem->title}} </h5>
        <p class="card-text"> {{ $h_mem->designation }} </p>
      </div>
    </div>
  </div>
</div>
</div>	
@endforeach	
	
</div>
			
			
<h2 style="font-size: 20px; color: #FFF; background: #004d91; float: left; margin-bottom: 25px; padding: 5px 20px 5px 10px; border-top-right-radius: 50px; border-bottom-right-radius: 50px;">Service Center, Kuleshwor, Kathmandu</h2>
	<div class="clearfix"></div>		
<div class="row">

@foreach ($service as $s_mem)
<div class="col-lg-4 col-md-6">
<div class="card members-card mb-3">
  <div class="row g-0 d-flex justify-content-between align-items-center">
    <div class="col-md-4">
		@if($s_mem->image_name == 'Noimage' or $s_mem->hide == "yes")
		<img src="{{ url('public/front/images/sadasyasewa-rectangle-logo.png') }}" />
		@else
		<img src=" {{ url('uploads/management'.'/'.$s_mem->image_name) }} " class="img-fluid rounded-start" alt="{{$s_mem->title}}">
		@endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$s_mem->title}}</h5>
        <p class="card-text">{{$s_mem->designation}}</p>
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
  