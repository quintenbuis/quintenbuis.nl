@props(['href' => '#'])
<li {{ $attributes }}>
    <a @class([
        'hover:text-primary hover:underline',
        'text-primary underline' => request()->fullUrlIs(route('page', $href)),
        ])
       href="{{ $href }}"
    >
        {{ $slot }}
    </a>
</li>
