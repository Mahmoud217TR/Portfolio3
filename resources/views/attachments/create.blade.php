@extends('layouts.app')
@section('title', 'Add Attachments')

@section('content')
    @include('attachments.dropzone',['url' => route('attachment.store',$project),'method'=>'post'])
@endsection