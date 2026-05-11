@extends('layouts.app')

@section('title', 'Add Plant')

@section('content')
    <h2>Add Plant</h2>
    <a class="btn" href="{{ route('plants.index') }}">&#8592; Back</a>

    <form method="POST" action="{{ route('plants.store') }}" enctype="multipart/form-data" style="margin-top:15px;">
        @csrf
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Type:</label><br>
            <input type="text" name="type" value="{{ old('type') }}">
            @error('type')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Water Frequency (days):</label><br>
            <input type="number" name="water_frequency" value="{{ old('water_frequency') }}">
            @error('water_frequency')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Sunlight:</label><br>
            <input type="text" name="sunlight" value="{{ old('sunlight') }}">
            @error('sunlight')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <p>
            <label>Image:</label><br>
            <input type="file" name="image">
            @error('image')<span style="color:red;">{{ $message }}</span>@enderror
        </p>
        <button class="btn" type="submit">Save Plant</button>
    </form>
@endsection