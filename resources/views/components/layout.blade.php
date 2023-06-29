<!doctype html>
<html lang="en">

<!-- START head.blade.php -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>My Blog</title>
</head>
<!-- END head.blade.php -->
<!-- START body -->
<body>
{{ $slot }}
</body>
<!-- END body -->
</html>
