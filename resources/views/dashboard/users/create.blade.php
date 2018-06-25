@extends('dashboard.layouts.master')
@section('content')
	<div class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a class="btn btn-secondary btn-sm float-right flat my-2" href="{{route('users.index')}}">Back</a>
                    <h2 class="">Users</h2>
                    <hr>
                    <form class="form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="ENter Name" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Confirm Password" aria-describedby="helpId">
                        </div>
                        <button type="button" name="" id="" class="btn btn-success btn-lg btn-block flat">Save</button>
                    </form>
                </div>
            </div>
        </div>
	</div>
@endsection
@section('myscript')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('js/vendor/pace.min.js') }}"></script>
@endsection
