@extends('layouts.app')

@section('title', 'Welcome!')

@section('content')
<div class="half-circle">
    <div class="circle-text">
        <img src="{{ asset('storage/images/pot-with-a-plant.png') }}" alt="Plant Icon" class="img-fluid" style="width: 80px; height: 150px;">
        <h1 class="text-center mb-2 text-huge font-archivo text-white">VirtuPlants</h1>
        <p class="text-center mb-1 fs-5 text-white opacity-75">Welcome to VirtuPlants! A place to care for your virtual plant.</p>
        <p class="text-center mb-3 fs-5 text-white opacity-75">Care to join? Let's get started!</p>
        <div class="text-center">
            <button type="button" class="btn-white-outline font-funnel mt-3 transition-smooth rounded"> Click here to join </button>
        </div>
    </div>
</div>
@endsection