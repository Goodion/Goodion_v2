@section('title', 'Главная')

<x-app-layout>
    <x-slot name="header">
        @include('layouts.header')
    </x-slot>

    @livewire('home')

    <x-slot name="footer">
        @include('layouts.footer')
    </x-slot>
</x-app-layout>
