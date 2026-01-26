<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0"/>
    <title> Lorem Ipsum Generator | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="/styles/index.css">
    @livewireStyles
</head>
<body>
    @include('common.header')
    <main>
        <h2 class="view-title">
            Lorem Ipsum Generator
        </h2>

        <livewire:live-generate />
    </main>
    @include('common.footer')
    @livewireScripts
</body>
</html>
