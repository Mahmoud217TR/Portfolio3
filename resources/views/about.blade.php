@extends('layouts.app')
@section('title','About Me')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-h1 hyper-helix ps-2 mb-4">About Me</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-10 mt-5">
            <h3 class="text-h3 text-light-color hyper-helix">General</h3>
            <p class="text-white-color savec mt-4">
                My name is Mahmoud Mahmoud, I'm {{ date('Y')-1999 }} years old Software Engineering Student at Al-Baath University in Homs, Syria.<br>
                I belive that I'm an Expert in Programming and Developing web & desktop apps cause I always use my abilities to the fullest trying to reach new limits, I'm also searching to Keep informed about the latest trends and developments to learn new technologies and skills so I can perfect my codes and Maximize my Skills, also I Develop creative strategies by assuming the worst and making a plan, I take calculated risks and success because I Make sound decisions in the absence of detailed instructions and informations.<br>
                Respecting time and manage it with multiple working plans is also one of my best abilities, also I'm capable of sustaining a high level of concentration.<br>
                I View problems as opportunities casue I learn the best from them, I always say: "I may not know what to do now, But I will make it, I always figure it out somehow and I conquer it.",<br>
                Creating stuff is what I do, maybe it's Solution seeking, achieving an idea, learning new skill, or just filling desire.<br>
                So if you are looking for an Extraordinary Developer I'm what you need, not because of my skills or knowledge, But for The Capabilities and Power I can show and develop fast enough to change the course of action Positively.<br>
            </p>
        </div
        >
        {{-- 
        For Later.......
        <div class="col-lg d-flex justify-content-center align-items-center">
            <div class="attachment">
                @include('info')
            </div>
        </div>
        --}}
        
    </div>
    <div class="row mt-5">
        <div class="col-lg-6 col-md-10 mt-5">
            <h3 class="text-h3 text-light-color hyper-helix">Education</h3>
            <p class="text-white-color savec mt-4">
                Beside my University learning, I'm mostly Self-taught developer who is ambitious to learn more and more about technologies and programing.<br>
                I learned using the Internet, by taking online courses, reading documentations, watching youtube videos, and searching for solutions.<br>
                I also have multiple Certificates:<br>
                <ul>
                    <li class="savec"><a href="https://www.coursera.org/account/accomplishments/specialization/certificate/N6JXVNU3PDDS">Python Specializtion</a></li>
                </ul>
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6 col-md-10 mt-5">
            <h3 class="text-h3 text-light-color hyper-helix">Work Experinces</h3>
            <p class="text-white-color savec mt-4">
                Most of my projects are personal, made to fix an issue that I encounterd in real life.<br>
                I also made several freelance projects.<br>
                I participated in the translation of laravel framework documentaion.<br>
            </p>
        </div>
    </div>
</div>
@endsection