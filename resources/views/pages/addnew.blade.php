@extends('layout')
@section('title', 'Add new Image')
@section('content')
    @include('components.header')
    @if (session()->has('message'))
        <div style="color: green; font-weight:600">{{ session('message') }}</div>
    @endif
    @include('.components.form')

    <div style="display: flex; gap: 2rem; flex-wrap: wrap">
        <a href="/all">Here are all the Uploaded Images</a>
        <a href="/addabout">About Section Customization</a>
    </div>
@endsection
