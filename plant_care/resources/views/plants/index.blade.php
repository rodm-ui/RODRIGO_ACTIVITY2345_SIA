<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plants Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f0ff;
        }

        .navbar {
            background: linear-gradient(90deg, #6a0dad, #9b59b6);
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .plant-img {
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .btn-purple {
            background: #8e44ad;
            color: white;
        }

        .btn-purple:hover {
            background: #732d91;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar p-3">
    <div class="container">
        <span class="navbar-brand">🌿 Plant Dashboard</span>
        <a href="{{ route('plants.create') }}" class="btn btn-light">+ Add Plant</a>
    </div>
</nav>

<div class="container mt-4">

    <div class="row">
        @foreach($plants as $plant)
        <div class="col-md-4 mb-4">
            <div class="card p-3">

                <!-- Image -->
                @if($plant->image)
                    <img src="{{ asset('storage/' . $plant->image) }}" class="plant-img mb-2">
                @else
                    <div class="text-center text-muted">No Image</div>
                @endif

                <!-- Info -->
                <h5 class="text-center">{{ $plant->name }}</h5>
                <p><b>Type:</b> {{ $plant->type }}</p>
                <p><b>Water:</b> {{ $plant->water_frequency }} days</p>
                <p><b>Sunlight:</b> {{ $plant->sunlight }}</p>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('plants.edit', $plant->id) }}" class="btn btn-purple btn-sm">Edit</a>

                    <form action="{{ route('plants.destroy', $plant->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $plants->links() }}
    </div>

</div>

</body>
</html>