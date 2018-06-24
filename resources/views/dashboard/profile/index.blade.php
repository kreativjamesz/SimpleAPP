@extends('dashboard.layouts.master')
@section('content')
	<div class="my-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 my-3">
					<div class="card card-user" style="border:none;background:transparent;">
						<img class="card-img-top flat" src="{{asset('img/avatars/8.jpg')}}" data-src="{{asset('img/avatars/8.jpg')}}" alt="Card image cap">
						<div class="card-block p-1">
							<h4 class="card-title">{{ Auth::user()->name }}</h4>
							<p class="card-text"><span class="badge badge-pill badge-success">&nbsp;</span> <i class="badge badge-danger"></i><small class="text-muted">Active</small></p>
						</div>
					</div>
				</div>
				<div class="col-lg-9 my-3">
					<h2>Projects &amp; Tasks</h2>
					<table class="table table-striped table-sm table-bordered table-hover table-inverse">
						<thead class="bg-primary">
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Description</th>
								<th>Remarks</th>
								<th>Date Started</th>
								<th>Date Ends</th>
							</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row">1</td>
									<td>Update User</td>
									<td>Update User Profile Data</td>
									<td>Project</td>
									<td>Jun. 26, 2018</td>
									<td>Dec. 31, 2018</td>
								</tr>
								<tr>
									<td scope="row">2</td>
									<td>Delete Permission</td>
									<td>Delete Persmission info</td>
									<td>Task</td>
									<td>Jun. 26, 2018</td>
									<td>Dec. 31, 2018</td>
								</tr>
							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('myscript')
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{ asset('js/vendor/pace.min.js') }}"></script>
@endsection

