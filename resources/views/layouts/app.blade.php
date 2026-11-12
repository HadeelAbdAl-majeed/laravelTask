<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    <title>Portfolio | @yield('title')</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> | 
        <a href="{{ route('projects') }}">My Projects</a> | 
        <a href="{{ route('contact') }}">Contact Me</a>
    </nav>

    <hr>

    <main>
        @yield('content') <!-- Child views will be injected here -->
    </main>

    <hr>
    <footer>All rights reserved &copy; 2026</footer>
</body>
</html>