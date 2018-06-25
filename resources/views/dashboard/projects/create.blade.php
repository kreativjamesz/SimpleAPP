@extends('dashboard.layouts.master')
@section('content')
    <div class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a class="btn btn-secondary btn-sm float-right flat my-2" href="{{route('projects.index')}}">Back</a>
                    <h2 class="">New Project</h2>
                    <hr>
                    <form class="form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="ENter Name" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <textarea class="form-control" name="description" id="description" rows="10" placeholder="Projects Description..."></textarea>
                        </div>
                        
                        <button type="button" name="" id="" class="btn btn-success btn-lg btn-block flat">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection