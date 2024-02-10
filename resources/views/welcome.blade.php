<!-- welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <section>
        <h1>Welcome!</h1>
        <p>Explore my development portfolio and read about my airsoft things.</p>
        <a href="{{ route('portfolio') }}" class="btn btn-primary">View Portfolio</a>
        <a href="{{ route('airsoft.blog') }}" class="btn btn-secondary">Explore Airsoft Blog</a>
    </section>
@endsection
