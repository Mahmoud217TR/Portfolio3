@extends('layouts.app')
@section('title','Edit '.$project->title)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-h2 hyper-helix text-white-color">Edit Project</h1>
        </div>
    </div>
    <form action="{{ route('project.update', $project) }}" method="post">
        @csrf
        @method('patch')
        @include('projects.form')
        <div class="row mt-5">
            <div class="col">
                <button id="submit-button" class="d-none" type="submit"></button>
                <a onclick="event.preventDefault();document.getElementById('submit-button').click();">@include('components.buttons.button',['text'=>'update'])</a>
            </div>
        </div>
    </form>
</div>
@endsection