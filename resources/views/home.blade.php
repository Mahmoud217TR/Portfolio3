@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="{{ route('project.create') }}">@include('components.buttons.specialbutton',['text'=>'Add Project'])</a>
        </div>
    </div>
</div>
@endsection
