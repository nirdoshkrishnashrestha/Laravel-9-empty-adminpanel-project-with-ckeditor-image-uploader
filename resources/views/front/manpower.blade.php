@extends('front.layout.main')
@section('title')
Manpower Catagories in Nepal 
@endsection
@section('content')
<?php 

if($page == '')
$page = 'Non-Skilled';

$data = array('Non-Skilled','Semi-Skilled','Skilled','Professional');

if (($key = array_search($page, $data)) !== false)
unset($data[$key]);

?>

<section class="container-page">
	<div class="heading-block">
		<div class="container">
		<h1>Manpower Catagories</h1>
		</div>
	</div>
	<div class="container">
		<div class="content-page">
		
			<p>
            {!! $cat->content !!}
            </p>
            <br>	
			
<div class="manpower-page">
	<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	  
    <button class="nav-link active" id="<?php echo $page; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $page; ?>" type="button" role="tab" aria-controls="<?php echo $page; ?>" aria-selected="true"><?php echo $page; ?></button>
	  
	  <?php foreach($data as $val){ ?>
    <button class="nav-link" id="<?php echo $val; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $val; ?>" type="button" role="tab" aria-controls="<?php echo $val; ?>" aria-selected="false"><?php echo $val; ?></button>
	  <?php } ?>
 
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="<?php echo $page; ?>" role="tabpanel" aria-labelledby="<?php echo $page; ?>-tab">
	  
	  <!-- First ko Data Tanne from here (Jobs) -->
	  
	  <div class="row">

        @foreach ($selected as $select)        
            <div class="col-lg-4 col-md-6 mb-4">
				<a href="{{ url('jobs/'.$select->id) }}"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
								@if($select->image_name == NULL or $select->hide == "yes")
								<img src="{{ url('public/front/images/logo.jpg') }}" />
								@else
								<img src="{{ url('uploads/job/'.$select->image_name) }}" alt="{{ $select->title }}"/>
								@endif
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>{{ $select->title }}</h2>
							<h5>{{ $select->company_name }}</h5>
							<span><i class="fas fa-globe-asia"></i> Country: {{ $select->country }}</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: {{ $select->salary }}</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: {{ $select->last_date }}</span><br>
							<span><i class="fas fa-user"></i> Working Hours: {{ $select->working_hours }}</span>
						</div>
					</div>
			  </div></a>
			</div>
        @endforeach
		</div>
	</div>
	 <?php foreach($data as $val){ ?>
  <div class="tab-pane fade" id="<?php echo $val; ?>" role="tabpanel" aria-labelledby="<?php echo $val; ?>-tab"> 
	 
	  <!-- Remain Jobs Data tanne-->
	  
	   <div class="row">

		<?php 
		$remaining_jobs = DB::table('jobs')->where('category', $val)->orderByDesc('id')->get();	
		foreach ($remaining_jobs as $rem_jobs) {	
			?>
			<div class="col-lg-4 col-md-6 mb-4">
			<a href="{{ url('jobs/'.$rem_jobs->id) }}">
				<div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
								@if($rem_jobs->image_name == NULL or $rem_jobs->hide == "yes")
								<img src="{{ url('public/front/images/logo.jpg') }}" />
								@else
								<img src="{{ url('uploads/job/'.$rem_jobs->image_name) }}" alt="{{ $rem_jobs->title }}"/>
								@endif	
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>{{ $rem_jobs->title }}</h2>
							<h5>{{ $rem_jobs->company_name }}</h5>
							<span><i class="fas fa-globe-asia"></i> Country: {{ $rem_jobs->country }}</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: {{ $rem_jobs->salary }}</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: {{ $rem_jobs->last_date }}</span><br>
							<span><i class="fas fa-user"></i> Working Hours: {{ $rem_jobs->working_hours }}</span>
						</div>
					</div>
			  </div>
			</a>
			</div>
			
			<?php } ?>
		
			
		</div>
	</div>
	 <?php } ?>
</div>	
  </div>          
		</div>
	</div>
</section>

@endsection
  