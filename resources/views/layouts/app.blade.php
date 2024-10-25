<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        @yield('content') <!-- This is where the content from other views will be injected -->
    </div>
</body>
</html>
