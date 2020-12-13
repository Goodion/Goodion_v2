@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal']) !!}>
