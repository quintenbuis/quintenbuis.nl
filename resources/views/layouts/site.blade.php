<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
<div class="grid grid-cols-3 min-h-screen">
    <section class="col-span-2 leading-8 grid content-center prose mx-auto my-32">
        @php
            $file = request()->is('/') ? 'home' : request()->path();
            echo Str::markdown(
                    file_get_contents(
                        resource_path("views/markdown/{$file}.md")
                    )
                );
        @endphp
    </section>

    <section class="fixed h-screen bg-secondary w-1/3 right-0 flex flex-col justify-between py-6">
        <a href="/">
            <x-icon-profile class="w-36 mx-auto" />
            <h1 class="text-primary text-4xl text-center mt-6">Quinten Buis</h1>
            <h2 class="text-primary text-xl text-center mt-2">Full Stack Developer</h2>
        </a>

        <x-menu>
            <x-menu.item href="uses">
                Uses
            </x-menu.item>
            <x-menu.item href="projects">
                Projects
            </x-menu.item>
        </x-menu>

        <footer class="flex gap-x-4 mx-auto">
            <x-social class="w-8" icon="github" link="https://github.com/quintenbuis"/>
            <x-social class="w-8" icon="twitter" link="https://twitter.com/quintenbuis"/>
        </footer>
    </section>
</div>
</body>
</html>
