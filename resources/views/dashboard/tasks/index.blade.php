@extends('dashboard.layouts.master')
@section('content')
	<div class="my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Tasks</h2>
                </div>
            </div>
        </div>
	</div>
@endsection
@section('myscript')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('js/vendor/pace.min.js') }}"></script>
@endsection
