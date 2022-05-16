@extends('layouts.app')
@section('title', 'Create a Project')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-h2 hyper-helix text-white-color">Create a new Project</h1>
        </div>
    </div>
    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('projects.form')
        {{-- Project Title --}}
        <div class="row mt-5">
            <label for="thumb" class="col col-form-label text-white-color hyper-helix text-h3">Thumbnail: </label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input id="thumb" type="file" class="form-control @error('thumb') is-invalid @enderror" name="thumb" required>

                @error('thumb')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <button id="submit-button" class="d-none" type="submit"></button>
                <a onclick="event.preventDefault();document.getElementById('submit-button').click();">@include('components.buttons.button',['text'=>'create'])</a>
            </div>
        </div>
    </form>
</div>
@endsection