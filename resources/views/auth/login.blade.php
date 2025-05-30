@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-4">
                    <h4 class="text-center mb-4">{{ __('Sign In To Your Account') }}</h4>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label small">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label small">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback small">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label small" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none small" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>

                        @if (Route::has('register'))
                        <div class="text-center pt-2">
                            <p class="small text-muted mb-0">{{ __("Don't have an account?") }} 
                                <a href="{{ route('register') }}" class="text-decoration-none">
                                    {{ __('Sign up') }}
                                </a>
                            </p>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection