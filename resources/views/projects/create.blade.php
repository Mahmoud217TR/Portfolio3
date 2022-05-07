@extends('layouts.app')
@section('title', 'Create a Project')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-h2 hyper-helix text-white-color">Create a new Project</h1>
        </div>
    </div>
    <form action="{{ route('project.store') }}" method="post">
        @csrf
        @include('projects.form')
        <div class="row mt-5">
            <div class="col">
                <button id="submit-button" class="d-none" type="submit"></button>
                <a onclick="event.preventDefault();document.getElementById('submit-button').click();">@include('components.buttons.button',['text'=>'create'])</a>
            </div>
        </div>
    </form>
</div>
@endsection