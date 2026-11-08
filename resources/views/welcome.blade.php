@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1>This is the Welcome section</h1>
    <p>Welcome to activity 11.</p>
    <p>Hello, {{ $name }}</p>

    @if (count($records) === 1)
        <p>I have one record!</p>
    @elseif (count($records) > 1)
        <p>I have multiple records!</p>
    @else
        <p>I don't have any records!</p>
    @endif
@endsection