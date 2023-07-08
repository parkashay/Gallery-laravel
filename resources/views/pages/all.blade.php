@extends('layout')
@section('title', 'All Images')
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
@section('content')
    @include('.components.header')
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
    <div class="all-page">
        @foreach ($images as $image)
            <div class="image-container">
                <img src="{{ asset('uploads/' . $image->image) }}" alt="">
                <a class="delete" href="/delete/{{ $image->id }}">Delete this image</a>
            </div>
        @endforeach
    </div>
@endsection
