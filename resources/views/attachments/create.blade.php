@extends('layouts.app')
@section('title', 'Add Attachments')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
                @include('attachments.dropzone',['url' => route('attachment.store',$project),'method'=>'post'])
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
                <a href="{{ route('project.show',$project) }}">@include('components.buttons.button',['text'=>'Done'])</a>
        </div>
    </div>
</div>
@endsection