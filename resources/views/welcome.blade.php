<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Link to Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- You can also embed custom styles here if preferred -->
    <style>
        /* Example of custom styles directly in the HTML */
        body {
            background-color: #f4f4f9;
            font-family: 'Roboto', sans-serif;
        }
        .custom-header {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <header class="custom-header">
        <h1>Welcome to {{ config('app.name', 'My App') }}</h1>
    </header>

    <div class="d-flex flex-column justify-content-center min-vh-100">
        @yield('content')
    </div>
    
    <!-- Link to Custom JavaScript -->
    <script src="{{ asset('js/custom-scripts.js') }}"></script>
    
    <!-- You can also embed custom scripts here if preferred -->
    <script>
        // Example custom JS code
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Custom script loaded.');
        });
    </script>
</body>
</html>
