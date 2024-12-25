@extends('templates.layout')

@section('main-content')
    @push('styles')
        <link href="{{ asset('css/info_card.css') }}" rel="stylesheet">
    @endpush

    <div class="info-cards-wrapper" style="margin-bottom: 90vh;">
        <a href="#contact_info" class="info-card heading-info-card">
            <h1>Contact info</h1>
            I want to talk about something that is not listen here
        </a>
        <a href="#feedback" class="info-card">
            <h1>Feedback</h1>
            I have something to quibble about
        </a>
        <a href="#contribute" class="info-card">
            <h1>Contribute</h1>
            I want to add to the codebase
        </a>
        <a href="#accessibility" class="info-card">
            <h1>Accessibility</h1>
            I have something to add on terms of accessibility
        </a>
    </div>
    
    <div class="info-card-article">
    <x-markdown path="../assets/sections/contribute.md" />
    </div>
@endsection