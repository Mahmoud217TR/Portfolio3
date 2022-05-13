@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-h1 hyper-helix ps-2 mb-4">Login</h1>
        </div>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        {{-- Email --}}
        <div class="row mt-5">
            <label for="email" class="col col-form-label text-white-color hyper-helix text-h3">Email: </label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Password --}}
        <div class="row mt-5">
            <label for="password" class="col col-form-label text-white-color hyper-helix text-h3">Password: </label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Remember Me --}}
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="text-white-color hyper-helix text-h3" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        {{-- Button --}}
        <div class="row mt-5">
            <div class="col-md-6">
                <button id="login-button" class="d-none" type="submit"></button>
                <a onclick="event.preventDefault();document.getElementById('login-button').click();">@include('components.buttons.button',['text'=>'Login'])</a>
            </div>
        </div>
    </form>
</div>
@endsection
