<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Admin Layout"}}</title>
</head>
<body>
    <header>
        {{ $header ?? 'Default Header' }}
    </header>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
