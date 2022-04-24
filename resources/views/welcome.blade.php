@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <p class="text-h1 savec text-light-color">
                    Hi my name is <span class="text-white-color">Mahmoud</span>,<br>
                    I’m a <span class="text-white-color">Software Engineer</span><br>
                    and a <span class="text-white-color">Fullstack Developer</span><br>
                </p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start align-items-center">
                <ul class="list-unstyled">
                    <li><a href="#">@include('components.specialbutton',['text'=>'Download CV'])</a></li>
                    <li class="mt-3"><a href="#">@include('components.specialbutton',['text'=>'About Me'])</a></li>
                    <li class="mt-3"><a href="#">@include('components.specialbutton',['text'=>'My Projects'])</a></li>
                    <li class="mt-3"><a href="#">@include('components.specialbutton',['text'=>'Contacts'])</a></li>
                </ul>
            </div>
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center">
                @include('components.gloab')
            </div>
        </div>
    </div>
@endsection