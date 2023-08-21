@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" initial-scale=1">
<style>
.container {
  margin: 0 ;
}
.container img {vertical-align: middle;}
.container .content {
  position: absolute;
  bottom: 460;
  color: eeeeee;
  width: 70%;
  padding: 00px;
}
</style>
</head>
<body>
<div class="container">
<div class="imgbox">
    <img class="center-fit" src="images/login.jpg"  width="1770" height="770" >
  <div class="content">
    <a class="navbar-brand text-white" href="">
    <img class="logo" src="images/logo.jpg" alt="logo"  width="1770" height="180" ></a>
    <div class="row justify-content-center">
                <center><b><h1 style="color:white;">{{ __(' ') }}</h1><h5 style="color:white;">{{ __(' ') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><h5><b>{{ __('Email Address') }}</h5></b></label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><h5><b>{{ __('Password') }}</h5></b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
   </div>
  </div>
 </body>
</html>