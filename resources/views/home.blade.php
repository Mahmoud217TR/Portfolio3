@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col d-flex justify-content-center my-4">
            <a href="{{ route('project.create') }}">@include('components.buttons.specialbutton',['text'=>'Add Project'])</a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center my-4">
            <a href="{{ route('message.index') }}">@include('components.buttons.specialbutton',['text'=>'Messages'])</a>
        </div>
    </div>
</div>
@endsection
