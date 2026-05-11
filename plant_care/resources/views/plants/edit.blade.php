@extends('layouts.app')

@section('title', 'Edit Plant')

@section('content')
    <h2>Edit Plant</h2>
    <a class="btn" href="{{ route('plants.index') }}">&#8592; Back</a>

    <form method="POST" action="{{ route('plants.update', $plant) }}" enctype="multipart/form-data" style="margin-top:15px;">
        @csrf
        @method('PUT')
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name', $plant->name) }}">
            @error('name')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Type:</label><br>
            <input type="text" name="type" value="{{ old('type', $plant->type) }}">
            @error('type')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Water Frequency (days):</label><br>
            <input type="number" name="water_frequency" value="{{ old('water_frequency', $plant->water_frequency) }}">
            @error('water_frequency')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Sunlight:</label><br>
            <input type="text" name="sunlight" value="{{ old('sunlight', $plant->sunlight) }}">
            @error('sunlight')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Image:</label><br>
            <input type="file" name="image">
            @if($plant->image)
                <img src="{{ asset('storage/'.$plant->image) }}" width="100">
            @endif
            @error('image')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <button class="btn" type="submit">Update Plant</button>
    </form>
@endsection