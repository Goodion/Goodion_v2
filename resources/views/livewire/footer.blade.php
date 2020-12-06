<footer>
    <div class="bg-main-bg-color py-16">
        <div class="container xl:px-13 mx-auto border-t border-gray-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-main-black text-sm mt-16 flex flex-row justify-between">
                <div class="flex flex-col">
                    <div class="mb-5">
                        <img src="/img/logo.png" alt="">
                    </div>
                    <div>© 2020</div>
                </div>
                <ul class="hidden md:flex flex-col flex-wrap justify-between mx-5">
                    <li class="font-bold">
                        {{ __('Information') }}
                    </li>
                    <li>
                        <a class="hover:underline" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="{{ route('about') }}">{{ __('About') }}</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="{{ route('feedback') }}">{{ __('Feedback') }}</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="{{ route('delivery_payment') }}">{{ __('Delivery and payment') }}</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="{{ route('offers') }}">{{ __('Offers') }}</a>
                        /
                        <a class="hover:underline" href="{{ route('news') }}">{{ __('News') }}</a>
                    </li>
                </ul>
                <ul class="hidden sm:flex flex-col justify-between mx-5">
                    <li class="font-bold">
                        {{ __('Personal Area') }}
                    </li>
                    @guest
                        @if (Route::has('register'))
                            <li>
                                <a class="hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        <li>
                            <a class="hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                    <li>
                        <a class="hover:underline" href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                        </a>
                    </li>
                    @endguest
                    <li>
                        <a class="hover:underline" href="/cart">{{ __('Cart') }}</a>
                    </li>
                    <li>
                        <div class="hover:underline"><a href="{{ route('users_agreement') }}">{{ __('Users agreement') }}</a></div>
                    </li>
                </ul>
                <ul class="flex flex-col justify-between">
                    <li class="font-bold mb-3">
                        {{ __('Contacts') }}
                    </li>
                    <li class="mb-3">
                        <a class="mb-10 hover:underline" href="{{ config('config.goodion_phone_link') }}">{{ config('config.goodion_phone') }}</a>
                    </li>
                    <li class="mb-3">
                        <a class="mb-10 hover:underline" href="{{ config('config.goodion_email_link') }}">{{ config('config.goodion_email') }}</a>
                    </li>
                    <li class="flex flex-row items-center justify-between mb-5">
                        <a class="mr-2" href="{{ config('config.goodion_whatsapp') }}" target="_blank">
                            <svg class="fill-current text-forest hover:text-forest-dark" width="24" height="24" xmlns="http://www.w3.org/2000/svg" ><path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 018.413 3.488 11.824 11.824 0 013.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 01-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        </a>
                        <a class="mr-2" href="{{ config('config.goodion_telegram') }}" target="_blank">
                            <svg class="fill-current text-forest hover:text-forest-dark" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 2c5.514 0 10 4.486 10 10s-4.486 10-10 10S2 17.514 2 12 6.486 2 12 2zm2.692 14.889a.59.59 0 00.553.073.576.576 0 00.362-.42c.435-2.042 1.489-7.211 1.884-9.068a.39.39 0 00-.129-.379.404.404 0 00-.399-.07c-2.096.776-8.553 3.198-11.192 4.175a.412.412 0 00.025.781c1.184.354 2.738.847 2.738.847s.725 2.193 1.104 3.308a.431.431 0 00.707.184l1.548-1.461s1.786 1.309 2.799 2.03zm-5.505-4.338l.84 2.769.186-1.754 5.092-4.593a.137.137 0 00.017-.188.143.143 0 00-.188-.032l-5.947 3.798z"/></svg>
                        </a>
                        <a href="{{ config('config.goodion_viber') }}" target="_blank">
                            <svg class="fill-current text-forest hover:text-forest-dark" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.892 13.745s.427.038.656-.247l.448-.563c.216-.28.738-.458 1.249-.174.676.382 1.55.982 2.149 1.541.33.278.407.688.182 1.121l-.002.009a4.71 4.71 0 01-.932 1.148l-.009.006c-.44.367-.946.58-1.487.404l-.01-.014c-.972-.275-3.304-1.464-4.79-2.649-2.431-1.918-4.159-5.082-4.637-6.778l-.015-.01c-.176-.543.039-1.049.404-1.488l.007-.008a4.668 4.668 0 011.148-.932l.009-.002c.432-.225.842-.149 1.121.182.367.379 1.056 1.291 1.54 2.149.284.51.106 1.033-.173 1.248l-.564.448c-.284.23-.247.657-.247.657s.834 3.156 3.953 3.952zm4.907-2.616a.304.304 0 01-.304-.302c-.014-1.83-.564-3.288-1.634-4.332-1.072-1.045-2.427-1.581-4.027-1.592a.302.302 0 01-.301-.306.302.302 0 01.303-.301h.002c1.762.012 3.258.606 4.447 1.764 1.19 1.162 1.802 2.765 1.817 4.763a.304.304 0 01-.301.306h-.002zm-1.595-.624h-.007a.304.304 0 01-.297-.31c.024-1.038-.273-1.878-.906-2.569-.63-.689-1.495-1.065-2.645-1.149a.305.305 0 01-.281-.325.305.305 0 01.325-.281c1.294.095 2.32.548 3.049 1.345.733.8 1.092 1.807 1.065 2.992a.304.304 0 01-.303.297zm-1.558-.522a.303.303 0 01-.303-.289c-.051-1.03-.537-1.534-1.527-1.588a.303.303 0 11.032-.606c1.308.07 2.034.819 2.101 2.164a.302.302 0 01-.288.318l-.015.001zm6.817 3.469c-.605 4.877-4.172 5.185-4.83 5.396-.28.09-2.882.737-6.152.524 0 0-2.438 2.94-3.199 3.705-.119.119-.258.167-.352.145-.131-.032-.167-.188-.165-.414l.02-4.016v-.001C2.023 17.468 2.3 12.496 2.354 9.893c.054-2.603.543-4.736 1.996-6.17 2.61-2.364 7.987-2.011 7.987-2.011 4.541.02 6.717 1.387 7.222 1.845 1.675 1.434 2.528 4.867 1.904 9.895zm-.652-11.113c-.597-.548-3.007-2.298-8.375-2.322 0 0-6.33-.382-9.416 2.45C1.302 4.185.698 6.698.634 9.815c-.063 3.118-.146 8.958 5.484 10.542l.006.002-.004 2.416s-.035.979.609 1.179c.779.241 1.236-.502 1.981-1.304.408-.44.971-1.086 1.397-1.58 3.851.322 6.812-.417 7.149-.526.777-.253 5.177-.816 5.893-6.657.738-6.022-.358-9.83-2.338-11.548z"/></svg>
                        </a>
                    </li>

                    <li class="font-bold mb-4">
                        {{ __('Socials') }}
                    </li>
                    <li class="flex flex-row items-center justify-between">
                        <a class="mr-2" href="{{ config('config.goodion_instagram') }}" target="_blank">
                            <svg class="fill-current text-forest hover:text-forest-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a class="mr-2" href="{{ config('config.goodion_facebook') }}" target="_blank">
                            <svg class="fill-current text-forest hover:text-forest-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zm-3 7h-1.924C13.461 7 13 7.252 13 7.889V9h3l-.238 3H13v8h-3v-8H8V9h2V7.077C10 5.055 11.064 4 13.461 4H16v3z"/></svg>
                        </a>
                        <a href="{{ config('config.goodion_vk') }}" target="_blank">
                            <svg class="fill-current text-forest hover:text-forest-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zm.25 16.996h-2.134c-1.205 0-1.409-.687-2.401-1.679-.897-.897-1.395-.209-1.374 1.068.006.339-.161.611-.566.611-1.264 0-3.08.178-4.918-1.806C5.974 13.157 4 9.079 4 8.677c0-.237.196-.344.524-.344h2.17c.574 0 .623.284.783.649.667 1.521 2.265 4.574 2.69 2.87.244-.978.344-3.245-.703-3.44-.594-.11.452-.746 1.968-.746.377 0 .786.041 1.205.137.769.179.771.523.761 1.026-.039 1.903-.269 3.184.233 3.507.479.31 1.739-1.717 2.403-3.281.183-.433.219-.722.734-.722h2.654c1.39 0-.182 1.997-1.383 3.557-.968 1.255-.916 1.28.209 2.324.803.744 1.75 1.76 1.75 2.336.002.272-.21.446-.748.446z"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
