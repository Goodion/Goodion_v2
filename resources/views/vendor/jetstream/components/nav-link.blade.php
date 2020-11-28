@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 py-5 border-t-4 border-main-green text-lg uppercase font-medium leading-5 text-main-black focus:outline-none focus:underline transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 py-5 border-t-4 border-transparent text-lg uppercase font-medium leading-5 text-main-black hover:underline hover:border-main-orange focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
