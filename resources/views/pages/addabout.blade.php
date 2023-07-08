@extends('layout')
@section('title', 'Add About')
@section('content')
@include('components.header')
@include('components.footer')

@if (session() -> has('message'))
    <div style="color: green">{{session('message')}}</div>
@endif
    <h1 style="text-align: center">Customize About Section</h1>
    <form action="/saveabout" method="post" class="addabout">
        @csrf
        <input type="text" name="heading" placeholder="Enter Title">
        <textarea name="description" rows="3" placeholder="Enter Description"></textarea>
        <button type="submit">Submit</button>
    </form>
    <style>
        .addabout {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 2rem
        }
    </style>
@endsection
