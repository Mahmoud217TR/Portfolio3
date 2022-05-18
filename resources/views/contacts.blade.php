@extends('layouts.app')
@section('title','Contacts')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-h1 hyper-helix ps-2 mb-4">Contacts</h1>
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
    </div>
@endsection