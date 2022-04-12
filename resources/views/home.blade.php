<x-layouts::site>
    @markdown(home.md)

    <x-slot name="sidebar">
        <div>
            <x-icon-profile class="w-36 mx-auto" />
            <h1 class="text-primary text-4xl text-center mt-6">Quinten Buis</h1>
            <h2 class="text-primary text-xl text-center mt-2">Full Stack Developer</h2>
        </div>

        <x-menu>
            <x-menu.item href="#">
                Uses
            </x-menu.item>
            <x-menu.item href="#">
                Projects
            </x-menu.item>
        </x-menu>

        <footer class="flex gap-x-4 mx-auto">
            <x-social class="w-8" icon="github" link="https://github.com/quintenbuis"/>
            <x-social class="w-8" icon="twitter" link="https://twitter.com/quintenbuis"/>
        </footer>
    </x-slot>
</x-layouts::site>
