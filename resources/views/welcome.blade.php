<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio Creator</title>

        @livewireStyles
    </head>
    <body class="antialiased">
        <!-- Include Livewire Component -->
        <livewire:Portfolio-Component />

        @livewireScripts
    </body>
</html>
