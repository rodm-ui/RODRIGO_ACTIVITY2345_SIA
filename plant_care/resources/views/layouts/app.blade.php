<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home Plant Care Tracker')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3e6ff; /* light purple */
            color: #333;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #9b59b6; /* purple */
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin: 20px auto;
            background-color: #f8f0ff;
            padding: 20px;
            border-radius: 10px;
        }
        a {
            color: #6c3483;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .card {
            background-color: #e6ccff;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 8px;
        }
        .btn {
            background-color: #9b59b6;
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
        }
        .btn:hover {
            background-color: #7d3c98;
        }
    </style>
</head>
<body>
    <header>
        <h1>Home Plant Care Tracker</h1>
    </header>
    <div class="container">
        @if(session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @endif
        @yield('content')
    </div>
    <footer>
        &copy; 2026 Plant Care Tracker
    </footer>
</body>
</html>