@extends('dashboard.layouts.master')
@section('content')
<div class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="float-left pr-5">Tasks Table</h2>
                    <div class="form-inline col-md-12 pl-0">
                        <input class="form-control input-sm flat w-25" style="display:inline-block" type="text" id="search" name="search" placeholder="search...">
                        <a href="" class="btn btn-dark flat float-right">Search</a>
                        <a href="{{url('/tasks/print')}}" class="btn btn-success flat ml-2">Print CSV</a>
                        <a href="{{route('tasks.create')}}" class="btn btn-primary flat ml-2 float-right">Create New Task</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td scope="row">{{$task->id}}</td>
                                <td>{{$task->name}}</td>
                                <td>{{$task->description}}</td>
                                <td>
                                    <a href="{{route('tasks.show',$task->id)}}" class="btn btn-primary btn-sm flat">Show</a> 
                                    <a href="{{route('tasks.edit',$task->id)}}" class="btn btn-warning btn-sm flat">Update</a> 
                                </td>
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
