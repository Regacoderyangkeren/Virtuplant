@extends('layouts.app')

@section('title', 'Welcome!')

@section('content')
<div class="text-container">
    <div class="text ">
        <h1 class="text-left mb-2 text-huge font-archivo text-black">VirtuPlants</h1>
        <p class="text-left mb-1 fs-5 text-black opacity-75">Welcome to VirtuPlants! A place to care for your virtual plant.</p>
        <p class="text-left mb-3 fs-5 text-black opacity-75">Care to join? Let's get started!</p>
        <div class="text-left">
            <button type="button" class="btn-green-outline font-funnel mt-3 transition-smooth rounded"> Click here to join </button>
        </div>
    </div>
</div>
<div class="half-circle-container">
    <div class="half-circle">
        <img src='../storage/images/Plantfic.png' class="img-plants">
    </div>
</div>

@endsection