@extends('dashboard.layouts.master')
@section('content')
	<div class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>{{$user->name}}</h2>
                    <h5>{{$user->email}}</h5>
                    <a href="{{route('users.index')}}" class="btn btn-warning btn-sm flat">Back</a>
                </div>
            </div>
        </div>
	</div>
@endsection
@section('myscript')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('js/vendor/pace.min.js') }}"></script>
@endsection