@extends('layouts.app')
@section('title','Edit Attachmnets')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <a href="{{ route('attachment.create',$project) }}">@include('components.buttons.button',['text'=>'add'])</a>
            </div>
        </div>
        <div class="row">
            @foreach ($project->attachments as $attachment)
                <div class="col-lg-4 my-2">
                    <div class="image-card">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <a href="{{ $attachment->original }}">
                                    <img src="{{ $attachment->url }}" alt="project attachment">
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col d-flex justify-content-center">
                                <a class="me-2" href="{{ route('attachment.thumb',$attachment) }}">@include('components.buttons.smallbutton',['text'=>'Thumb'])</a>
                                <form action="{{ route('attachment.destroy',$attachment) }}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <button id="remove-button-{{$attachment->id}}" class="d-none" type="submit"></button>
                                    <a class="me-2" onclick="event.preventDefault();document.getElementById('remove-button-{{$attachment->id}}').click();">@include('components.buttons.smallbutton',['text'=>'Remove'])</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection