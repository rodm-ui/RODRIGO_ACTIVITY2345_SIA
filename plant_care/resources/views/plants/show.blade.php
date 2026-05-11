@extends('layouts.app')

@section('title', $plant->name)

@section('content')
    <h2>{{ $plant->name }}</h2>
    <p><strong>Type:</strong> {{ $plant->type }}</p>
    <p><strong>Water every:</strong> {{ $plant->water_frequency }} days</p>
    <p><strong>Sunlight:</strong> {{ $plant->sunlight }}</p>
    @if($plant->image)
        <img src="{{ asset('storage/'.$plant->image) }}" width="200">
    @endif
    <br><br>
    <a class="btn" href="{{ route('plants.index') }}">&#8592; Back</a>
@endsection