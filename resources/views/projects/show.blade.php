@extends('layouts.app')
@section('title', $project->title)

@section('content')
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <h1 class="text-h2 text-white-color hyper-helix">{{ $project->title }}</h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="text-muted savec">
                {!! $project->description !!}
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <a class="me-2" href="{{ $project->link }}" target="_blank">@include('components.buttons.smallbutton',['text'=>'Link'])</a>
            @auth
                @can('update',$project)
                    <a class="me-2" href="{{ route('project.edit',$project) }}">@include('components.buttons.smallbutton',['text'=>'edit'])</a>
                @endcan
                @can('delete',$project)
                <a class="me-2" onclick="event.preventDefault();document.getElementById('remove-button').click();">@include('components.buttons.smallbutton',['text'=>'Remove'])</a>
                <form action="{{ route('project.destroy',$project) }}" method="post">
                    @csrf
                    @method('Delete')
                    <button id="remove-button" class="d-none" type="submit"></button>
                </form>
                @endcan
            @endauth
        </div>
        <div class="col d-flex align-items-center justify-content-end">
            <p class="text-muted savec pt-1 mb-0">
               Project was made at {{ $project->date }}
            </p>
        </div>
    </div>
    <div class="row mb-5">
        
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            @include('components.displayboard')
        </div>
    </div>
</div>
@endsection