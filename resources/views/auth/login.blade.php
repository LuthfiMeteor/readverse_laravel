@extends('layouts.app')

@section('content')
    @include('components.header')
    <div class="container position-absolute top-50 start-50 translate-middle" style="background-color: #1a1a1a;">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="text-center"><img src="{{ asset('img/Logo Black Rev.png') }}" alt=""
                            style="width: 120px">
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                <div class="">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label for="password" class="form-label mt-1">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="">
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
                        <hr>
                        <div class="text-center fs-5 mt-3">
                            Login With Social
                        </div>
                        @if (session('status'))
                            <div class="text-danger fw-bold text-center">{{ session('status') }}</div>
                        @endif

                        <div class="d-flex justify-content-center text-center mt-2 pt-1">
                            <a href="auth/google" class="text-dark p-2"><img src="img/google.png" alt=""
                                    style="width: 40px"></i></a>
                            <a href="login/facebook" class="text-dark p-2"><img src="img/Facebook_f_logo_(2019).svg.png"
                                    alt="" style="width: 40px"></i></a>
                            <a href="auth/github" class="text-dark p-2"><img src="img/github-mark.png" alt=""
                                    style="width: 40px"></i></a>
                            <a href="login/twitter" class="text-dark p-2"><img src="img/twitter_circle-512.webp" alt=""
                                    style="width: 40px"></i></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
