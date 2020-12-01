<div class="container xl:px-13 mx-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-28">
            <div class="hidden sm:flex flex-grow items-center inline-block justify-start w-1/3">
                <img src="/img/icon/pin.png" alt="">
                <a class="ml-2 border-b border-main-black select-none no-outline" href="#" role="button" @click.prevent="cityChoiceModalOpen = true">
                    {{ dd($city) }}
                    {{ $city ?? 'Ваш город'}}
                </a>
            </div>
            <div class="flex flex-grow-0 justify-between items-center">
                <a href="/"><img src="/img/logo.png" alt=""></a>
            </div>
            <div class="flex flex-grow items-center justify-end w-1/3">
                <a href="/cart"><img src="/img/icon/supermarket.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<div class="container xl:px-13 mx-auto">
    <div class="max-w-7xl mx-auto sm:px-0 md:px-6 lg:px-8 border-t border-opacity-40">
        <div class="hidden justify-center text-center space-x-8 sm:-my-px sm:flex">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('feedback') }}" :active="request()->routeIs('feedback')">
                {{ __('Feedback') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('delivery_payment') }}" :active="request()->routeIs('delivery_payment')">
                {{ __('Delivery and payment') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('offers_news') }}" :active="request()->routeIs('offers_news')">
                {{ __('Offers and news') }}
            </x-jet-nav-link>
        </div>
    </div>
</div>
