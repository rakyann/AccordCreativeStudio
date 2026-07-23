@extends('layouts.app')

@section('content')

    @include('partials.navbar')
    
    <main>
        @include('partials.hero')
        
        @include('partials.about')
        
        @include('partials.works')
        
        @include('partials.service')
        
        @include('partials.faq')
        
        @include('partials.testimonials')
        
        @include('partials.cta-footer')
    </main>

@endsection
