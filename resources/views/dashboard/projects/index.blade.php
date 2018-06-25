@extends('dashboard.layouts.master')
@section('content')
	<div class="my-5">
        <div class="container-fluid">
            <div class="animated fadeIn my-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card text-left|center|right">
                            <div class="card-body">
                                <h3 class="card-title">Projects</h3>
                                <p class="card-text">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($projects as $project)
                                            <tr>
                                                <td scope="row">{{$project->id}}</td>
                                                <td><a href="{{route('projects.show',$project->id)}}">{{$project->name}}</a></td>
                                                <td>{{$project->description}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection
@section('myscript')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vendor/pace.min.js') }}"></script>
@endsection
