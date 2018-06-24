@extends('dashboard.layouts.master')
@section('content')
	<div class="my-5">
		<app-list></app-list>
	</div>
@endsection
@section('myscript')
	<script src="{{asset('js/app.js')}}"></script>
@endsection
