@extends('layouts.app')

@section('content')

    @include('partials.navbar')
    
    <main>
        @include('partials.hero')
        
        @include('partials.about')
    </main>

@endsection
