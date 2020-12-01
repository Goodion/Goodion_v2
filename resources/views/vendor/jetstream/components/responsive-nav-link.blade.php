@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-main-green text-base font-medium text-white bg-gray-400 focus:outline-none focus:text-white-800 focus:bg-white-100 focus:border-gray-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-400 hover:text-gray-800 hover:bg-gray-400 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-400 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
