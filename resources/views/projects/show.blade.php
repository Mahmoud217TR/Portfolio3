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
            <p class="text-muted savec">
                {!! $project->description !!}
            </p>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <a href="{{ $project->link }}" target="_blank">@include('components.buttons.smallbutton',['text'=>'Link'])</a>
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