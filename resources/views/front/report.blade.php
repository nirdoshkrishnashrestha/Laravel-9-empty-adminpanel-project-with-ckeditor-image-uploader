@extends('front.layout.main')
@section('title')
Reports
@endsection
@section('content')

<section class="container-page">

	<div class="container">
		<div class="content-page">
			<h1>Reports</h1>
            <table class="table table-bordered align-middle">
                <thead class="table-dark align-middle">
                  <tr>
                    <th class="text-center" scope="col">S.N.</th>
                    <th scope="col">Title</th>
                    {{-- <th class="text-center" scope="col">Published Date</th> --}}
                      <th class="text-center" scope="col">View Report</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                 $i = 1; 
                 foreach($reports as $report){ ?>
                  <tr>
                    <th class="text-center" scope="row"><?php echo $i; ?></th>
                    <td><a href="{{ url('uploads/team/'.$report->image_name) }}" target="_blank"><?php echo $report->title; ?></a></td>
                    {{-- <td class="text-center"><?php echo $report->created_at; ?></td> --}}
                  <td class="text-center"><a href="{{ url('uploads/team/'.$report->image_name) }}" target="_blank">Download</a></td>
                  </tr>
                  <?php $i++;} ?>
                </tbody>
              </table>
		</div>
	</div>
</section>

@endsection



