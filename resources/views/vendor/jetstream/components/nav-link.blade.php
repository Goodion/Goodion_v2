@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-5 pb-10 border-t-4 border-forest text-sm md:text-base lg:text-lg uppercase font-medium leading-5 text-graphite focus:outline-none focus:underline transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-5 pb-10 border-t-4 border-transparent text-sm md:text-base lg:text-lg uppercase font-medium leading-5 text-graphite hover:border-sand focus:outline-none focus:text-forest focus:border-forest transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
