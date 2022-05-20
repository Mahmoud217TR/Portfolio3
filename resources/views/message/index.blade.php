@extends('layouts.app')
@section('title','Messages')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-h1 hyper-helix ps-2 mb-4">Messages</h1>
        </div>
    </div>
    @forelse ($messages as $message)
    <div class="row">
        <div class="col">
            <a href="{{ route('message.show',$message) }}"><p class="savec ps-2 mb-0 one-line">{{ $message->subject }}</p></a>
        </div>
        <div class="col"><p class="savec text-muted ps-2 mb-0 one-line text-end">{{ $message->created_at }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <hr class="hr mt-0">
        </div>
    </div>
    @empty
    <div class="row">
        <div class="col">
            <h2 class="text-h2 hyper-helix ps-2 mb-4">No Messages to show.</h2>
        </div>
    </div>
    @endforelse
    @include('layouts.paginator',['objects'=>$messages])
</div>
@endsection