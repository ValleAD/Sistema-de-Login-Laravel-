@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="/static/css/style.css" type="text/css">
<article>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div align="center"><img src="/static/img/logo.png"></div>

                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6" align="center">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6" align="center">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                   
                     <br>   
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" align="center">
                                <button id="signin" type="submit" class="btn btn-primary">
                                <a id="signin" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                </button>
                                
                                
                                <p>   
                                @if (Route::has('password.request'))
                                    <a id="forgot" href="{{ route('password.request') }}">
                                        <b>{{ __('Forgot Your Password?') }}</b>
                                    </a>
                                @endif
                                </p>

                                <p>
                                   New in "Anuncios Modernos"?
                                </p>

                                <p>
                                    <b><a id="register" href="{{ route('register') }}">{{ __('Sign Up') }}</a></b>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</article>
<aside><img src="/static/img/vacancy 1.png"></aside>
@endsection