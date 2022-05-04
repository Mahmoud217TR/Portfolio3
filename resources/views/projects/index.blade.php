@extends('layouts.app')
@section('title','Projects')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @forelse ($projects as $project)
            <div class="col my-3 d-flex justify-content-center">
                @include('components.projectcard')
            </div>
            @empty
                <p class="display-4 text-light-color hyper-helix text-center">
                    NO Projects added yet.
                </p>
            @endforelse
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-center align-items-center">
                <!-- Previous link -->
                @if($projects->currentPage() > 1)
                    <a href="{{ $projects->previousPageUrl() }}">@include('components.buttons.smallbutton',['text'=>'Previous'])</a>
                @endif

                <!-- Current Page Number -->
                <span class="pagination-indecator text-white-color mx-2 hyper-helix"> {{ $projects->currentPage() }} </span>

                <!-- Next link -->
                @if($projects->hasMorePages())
                    <a href="{{ $projects->nextPageUrl() }}">@include('components.buttons.smallbutton',['text'=>'Next'])</a>
                @endif
            </div>
        </div>
    </div>
@endsection