@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-5 pb-10 border-t-4 border-main-green text-sm md:text-base lg:text-lg uppercase font-medium leading-5 text-main-black focus:outline-none focus:underline transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-5 pb-10 border-t-4 border-transparent text-sm md:text-base lg:text-lg uppercase font-medium leading-5 text-main-black hover:border-main-orange focus:outline-none focus:text-gray-700 focus:border-main-green transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
