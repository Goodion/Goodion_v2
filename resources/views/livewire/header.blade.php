<header>
    <div class="container xl:px-13 mx-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-28">
                <div class="hidden sm:flex flex-grow items-center inline-block justify-start w-1/3">
                    <img src="/img/icon/pin.png" alt="">
                    <a class="ml-2 border-b border-graphite select-none no-outline" href="#" role="button" @click.prevent="cityChoiceModalOpen = true">
                        {{ $currentCity ?? 'Ваш город'}}
                    </a>
                </div>
                <div class="flex flex-grow-0 justify-between items-center">
                    <a href="{{ route('dashboard') }}"><img src="/img/logo.png" alt=""></a>
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
                <div
                    x-data="{ offersNewsDropdown: false}"
                    x-on:mouseenter="offersNewsDropdown = true"
                    x-on:mouseleave="offersNewsDropdown = false"
                    class="relative items-center px-1 pt-5 mb-10 border-transparent hover:border-sand border-t-4 text-sm md:text-base lg:text-lg uppercase font-medium leading-5 text-graphite transition duration-150 ease-in-out"
                    x-bind:class="{ 'border-forest': $wire.activeMenu === 'news' || $wire.activeMenu === 'offers' }"
                >
                    <div class="relative cursor-default z-20 px-1">
                        {{ __('Offers and news') }}
                    </div>
                    <div
                        x-show="offersNewsDropdown"
                        class="absolute inset-0"
                    >
                        <div class="border-graphite-light text-graphite border transition duration-150 ease-in-out bg-white">
                            <a href="{{ route('offers') }}" class="block cursor-pointer mt-16 py-5 hover:bg-forest-light focus:text-forest" x-bind:class="{ 'cursor-default bg-sand hover:bg-sand': $wire.activeMenu === 'offers' }">
                                {{ __('Offers') }}
                            </a>
                            <a href="{{ route('news') }}" class="block cursor-pointer py-5 hover:bg-forest-light focus:text-forest" x-bind:class="{ 'cursor-default bg-sand hover:bg-sand': $wire.activeMenu === 'news' }">
                                {{ __('News') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
