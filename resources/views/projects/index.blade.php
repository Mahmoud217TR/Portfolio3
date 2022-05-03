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
                <p class="display-4 text-light-color hyper-helix">
                    NO Projects added yet.
                </p>
            @endforelse
        </div>
    </div>
@endsection