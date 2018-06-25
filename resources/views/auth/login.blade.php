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
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
    
    <div class="v-center">
    {{-- <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>{{ __('Login') }}</h2>
                    <hr>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="flat form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email..." required autofocus>

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
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary flat">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link flat" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                                <h2>{{ __('Login') }}</h2>
                                <p class="text-muted">Sign In to your account</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text flat">
                                            <i class="icon-user"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="email" class="flat form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email..." required autofocus>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text flat">
                                            <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input id="password" type="password" class="flat form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter password..." required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4 flat">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-link px-0 flat" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p class="mb-0">Type in command prompt <b>php artisan db:seed</b>, and it'll generate sample user's email, all with the same password of "password" such as:</p>
                                <small class="text-light">
                                superadministrator@app.com<br>
                                administrator@app.com<br>
                                user@app.com<br>
                                </small>
                                <a href="{{route('register')}}" class="btn btn-primary active mt-3" type="button">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        
    </div>
</div>
      
@endsection
