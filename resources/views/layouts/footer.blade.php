<div class="bg-main-bg-color py-16">
    <div class="container xl:px-13 mx-auto border-t border-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-main-black text-sm mt-16 flex flex-row justify-between">
            <div class="flex flex-col justify-between">
                <div class="mb-10">
                    <img src="/img/logo.png" alt="">
                </div>
                <div class="mb-10">© 2020 «Goodion»</div>
                <div class="underline"><a href="/users_agreement">Пользовательское&nbsp;соглашение</a></div>
            </div>
            <ul class="flex flex-row flex-wrap justify-between">
                <li class="mx-10">
                    <a class="hover:underline" href="/">Каталог</a>
                </li>
                <li class="mx-10">
                    <a class="hover:underline" href="/about">О нас</a>
                </li>
                <li class="mx-10">
                    <a class="hover:underline" href="/feedback">Обратная связь</a>
                </li>
                <li class="mx-10">
                    <a class="hover:underline" href="/delivery_payment">Доставка и оплата</a>
                </li>
                <li class="mx-10">
                    <a class="hover:underline" href="/offers_news">Акции и новости</a>
                </li>
                <li class="mx-10">
                    @guest
                        @if (Route::has('register'))
                            <a class="hover:underline" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            /
                        @endif

                        <a class="hover:underline" href="{{ route('login') }}">{{ __('Вход') }}</a>
                    @else
                        <span class="font-medium">{{ Auth::user()->name }}</span>
                        /
                        <a class="hover:underline" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Выход') }}
                        </a>
                    @endguest
                </li>
                <li class="mx-10">
                    <a class="hover:underline" href="/cart">Корзина</a>
                </li>
            </ul>
            <div class="flex flex-col justify-between">
                <a class="mb-10" href="tel:84950154321">+7&nbsp;(495)&nbsp;015&#8209;43&#8209;21</a>
                <a class="mb-10" href="mailto:info@goodion.ru">info@goodion.ru</a>
                <div class="flex flex-row items-center justify-between">
                    <a class="mr-2" href="https://www.instagram.com/goodion.ru/" target="_blank"><img src="/img/icon/instagram-b.png" alt=""></a>
                    <a class="mr-2" href="https://www.facebook.com/" target="_blank"><img src="/img/icon/facebook-b.png" alt=""></a>
                    <a href="https://vk.com/goodion" target="_blank"><img src="/img/icon/vk-b.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
