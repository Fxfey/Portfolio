<!-- welcome.blade.php -->
@extends('layouts.app')

@section('content')

<h1 class="landing-title">Hey,</h1>
<h1 class="second landing-title">I'm Ben</h1>

<h2 class="landing-question">What brings you here?</h2>

<div class="item-seperator">
    <svg class="bullet-point" height="50" width="10" xmlns="http://www.w3.org/2000/svg">
        <line x1="0" y1="0" x2="0" y2="20"/>
    </svg> 
    <a href="{{ route('airsoft.blog') }}" class="landing-item">Airsoft</a>
</div>

<div class="item-seperator">
    <svg class="bullet-point" height="50" width="10" xmlns="http://www.w3.org/2000/svg">
        <line x1="0" y1="0" x2="0" y2="20"/>
    </svg> 
    <a href="{{ route('portfolio') }}" class="landing-item">Development</a>
</div>

@endsection

<script>

document.addEventListener("DOMContentLoaded", function() {
    document.getElementsByClassName("main-header")[0].classList.add("hide-me");
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementsByClassName("main-footer")[0].classList.add("hide-me");
});


</script>