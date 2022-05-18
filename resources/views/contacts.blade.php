@extends('layouts.app')
@section('title','Contacts')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-h1 hyper-helix ps-2 mb-4">Contacts</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <h2 class="text-h2 hyper-helix ps-2 mb-4">You can reach me at</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 my-2">
                <contact-component info='+963 938318491' pic='@include('components.contacts.phone')'>
                </contact-component>
            </div>
            <div class="col-md-4 my-2">
                <contact-component info='@MahmoudTR' pic='@include('components.contacts.telegram')'>
                </contact-component>
            </div>
            <div class="col-md-4 my-2">
                <contact-component info='mahmoud17tr@gmail.com' pic='@include('components.contacts.email')'>
                </contact-component>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h2 class="text-h2 hyper-helix ps-2 mb-4">Or just leave me a message</h2>
            </div>
        </div>
        <form class="ps-2" action="{{ route('message.store') }}" method="post">
            @csrf
            <div class="row my-4">
                <div class="col-lg-4 floating-control">
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name='fullname' id='fullname' placeholder="Fullname" value ='{{ old('fullname') }}' required>
                    <label class="floating-label" for='fullname'>Fullname</label>
                    @error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-5 floating-control">
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name='subject' id='subject' placeholder="Subject" value ='{{ old('subject') }}' required>
                    <label class="floating-label" for='subject'>Subject</label>
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-5 floating-control">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name='email' id='email' placeholder="Email" value ='{{ old('email') }}' required>
                    <label class="floating-label" for='email'>Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-5 floating-control">
                    <textarea class="form-control text-control @error('message') is-invalid @enderror" name='message' id='message' placeholder="Your Message" value ='{{ old('message') }}' required></textarea>
                    <label class="floating-label" for='message'>Your Message</label>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-6">
                    <button id="send-button" class="d-none" type="submit"></button>
                    <a onclick="event.preventDefault();document.getElementById('send-button').click();">@include('components.buttons.button',['text'=>'Send'])</a>
                </div>
            </div>
        </form>
    </div>
@endsection