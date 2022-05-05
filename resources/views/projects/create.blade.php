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
    </form>
</div>
@endsection