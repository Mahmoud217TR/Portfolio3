@extends('layouts.app')
@section('title','Projects')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-h1 hyper-helix ps-2 mb-4">My Projects</h1>
            </div>
        </div>
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
        @include('layouts.paginator',['objects'=>$projects])
    </div>
@endsection