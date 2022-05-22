@extends('front.layout.main')
@section('title')
Legal Documents
@endsection
@section('content')

<section class="container-page">
	<div class="heading-block">
		<div class="container">
		<h1>Legal Documents</h1>
		</div>
	</div>
	<div class="container">
		<div class="content-page">
			
<div class="legal-doc-page">
	
<div class="row">
	@foreach ($legal_doc as $item)
<div class="col-lg-3 col-md-4 col-sm-6">
	<div class="thumbsize">
		<div class="gallery-thumbnail">
			<a href="{{ url('uploads/legal/'.$item->image_name) }}"><img src="{{ url('uploads/legal/'.$item->image_name) }}" /></a>
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

@section('lightbox')
<link rel="stylesheet" href="{{ url('public/front/css/jquery.lightbox.css') }}">
<script src="{{ url('public/front/js/jquery.lightbox.js') }}"></script>  
<script>
  $(function() {
    $('.thumbsize a').lightbox();
  });
</script>	
@endsection
  