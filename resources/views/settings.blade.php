@extends('layouts.app')
@section('title','Settings')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-h1 hyper-helix ps-2 mb-4">Settings</h1>
        </div>
    </div>
    <form method="POST" action="{{ route('settings.update') }}">
        @csrf
        @method('patch')
        {{-- name --}}
        <div class="row mt-5">
            <label for="name" class="col col-form-label text-white-color hyper-helix text-h3">name: </label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Email --}}
        <div class="row mt-5">
            <label for="email" class="col col-form-label text-white-color hyper-helix text-h3">Email: </label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- Password Confirm --}}
        <div class="row mt-5">
            <label for="password-confirm" class="col col-form-label text-white-color hyper-helix text-h3">Confirm Password: </label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
        </div>

        {{-- Button --}}
        <div class="row mt-5">
            <div class="col-md-6">
                <button id="update-button" class="d-none" type="submit"></button>
                <a onclick="event.preventDefault();document.getElementById('update-button').click();">@include('components.buttons.button',['text'=>'update'])</a>
            </div>
        </div>
    </form>
</div>
@endsection