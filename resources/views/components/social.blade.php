@props(['icon', 'link' => '#'])

<a href="{{ $link }}" target="_blank">
    <x-dynamic-component {{ $attributes }} :component="'icon-'.$icon" />
</a>
