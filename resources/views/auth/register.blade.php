@extends('auth.layouts.master')
@section('styles')
    <style>
        body {
            height:100%;
            min-height:900px;
        }
        .v-center {
            margin-top:60px;
            overflow: hidden;
            position: absolute;
            width: 100%;
            height: 85%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index:1;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            z-index:999;
        }
    </style>
@endsection
@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    @endif
    <div class="v-center">
        {{-- <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>{{ __('Register') }}</h2>
                    <hr>
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="flat form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter name..." required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="flat form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email..." required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="flat form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter password..." required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="flat form-control" name="password_confirmation" placeholder="Confirm password..." required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary flat float-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text flat">
                                <i class="icon-user"></i>
                                </span>
                            </div>
                            <input id="name" type="text" class="flat form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter name..." required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text flat">@</span>
                            </div>
                            <input id="email" type="email" class="flat form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email..." required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text flat">
                                    <i class="icon-lock"></i>
                                </span>
                            </div>
                            <input id="password" type="password" class="flat form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter password..." required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text flat flat">
                                    <i class="icon-lock"></i>
                                </span>
                            </div>
                            <input id="password-confirm" type="password" class="flat form-control" name="password_confirmation" placeholder="Confirm password..." required>
                        </div>
                        <button class="btn btn-block btn-success flat" type="submit">{{ __('Register') }}</button>
                    </form>
                </div>
                <div class="card-footer p-4">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-block btn-primary flat" type="button">
                                <span>facebook</span>
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-block btn-info flat" type="button">
                                <span>twitter</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
