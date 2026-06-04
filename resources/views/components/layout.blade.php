<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Touchstone Conference' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="bg-cover bg-center bg-fixed"
    style="background-image: url('/assets/images/conference-bg.jpg');"
    >
    <div class="min-h-screenpy-12">
        <main class="mx-auto max-w-5xl bg-white shadow-2xl">

            {{ $slot }}

        </main>
    </div>
</body>
</html>