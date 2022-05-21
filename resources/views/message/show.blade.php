@extends('layouts.app')
@section('title',$message->subject)

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-h2 hyper-helix ps-2 mb-4">{{ $message->subject }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="savec ps-2 mb-4">Sent From: {{ $message->email }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="savec ps-2 mb-4">
                {{ $message->message }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="savec text-end mb-4">{{ $message->created_at }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-flex justify-content-md-start justify-content-center my-2">
            <a href="{{ route('message.index') }}">@include('components.buttons.button',['text'=>'back'])</a>
        </div>
        <div class="col-md-6 d-flex justify-content-md-end justify-content-center my-2">
            <form action="{{ route('message.destroy',$message) }}" method="POST">
                @csrf
                @method('delete')
                <button id="remove-button" class="d-none" type="submit"></button>
                <a onclick="event.preventDefault();document.getElementById('remove-button').click();">@include('components.buttons.button',['text'=>'delete'])</a>
            </form>
        </div>
    </div>
</div>
@endsection