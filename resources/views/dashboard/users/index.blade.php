@extends('dashboard.layouts.master')
@section('content')
	<div class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="float-left pr-5">Users Table</h2>
                    <div class="form-inline col-md-12 pl-0">
                        <input class="form-control input-sm flat w-25" style="display:inline-block" type="text" id="search" name="search" placeholder="search...">
                        <a href="" class="btn btn-dark flat float-right">Search</a>
                        <a href="{{route('users.create')}}" class="btn btn-success flat ml-2">Print CSV</a>
                        <a href="{{route('users.create')}}" class="btn btn-primary flat ml-2 float-right">Create New User</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td scope="row">{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{route('users.show',$user->id)}}" class="btn btn-link btn-small">Show</a> <a href="" class="btn btn-link btn-small">Edit</a> <a href="" class="btn btn-link btn-small">Delete</a></td>
                            </tr>
                            @endforeach
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
