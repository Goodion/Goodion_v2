@section('title', 'О нас')

<x-base-container>
    <x-slot name="title">
        Чем мы занимаемся
    </x-slot>
    <ul class="text-right font-semibold mb-16">
        <li>GoodION – это небольшой маркетплейс.</li>
        <li>Маркетплейс, для которого мы вдумчиво подбираем каждый товар.</li>
        <li>Маркетплейс, где мы лично тестируем всё, что размещаем.</li>
        <li>Маленький, но душевный и честный.</li>
    </ul>
    <div class="flex flex-wrap sm:flex-nowrap justify-between mb-16">
        <div class="mb-8 flex text-center object-center flex-col sm:w-1/3 sm:mr-8">
            <img class="mx-auto w-16 sm:mb-12" src="/img/icon/sale.png" alt="sale">
            <div class="text-main-blue font-bold text-lg mb-5">И - изучаем рынок</div>
            <div>
                Ищем для вас акции и распродажи
                напрямую от поставщиков. Приходите
                к нам и не тратьте время на поиск!
            </div>
        </div>
        <div class="mb-8 flex flex-col flex-wrap text-center object-center sm:w-1/3 sm:mr-8">
            <img class="mx-auto w-16 sm:mb-12" src="/img/icon/time.png" alt="clock">
            <div class="text-main-orange font-bold text-lg mb-5">О - опережаем время</div>
            <div>
                Находим и предлагаем вам
                всё самое новое и необычное
                на рынке! Будьте в тренде!
            </div>
        </div>
        <div class="mb-8 flex flex-col text-center object-center sm:w-1/3">
            <img class="mx-auto w-16 sm:mb-12" src="/img/icon/user.png" alt="magnifying glass">
            <div class="text-main-green font-bold text-lg mb-5">Н - находим шедевры</div>
            <div>
                Сотрудничаем с мастерами,
                создающими для вас качественные
                изделия ручной работы.
            </div>
        </div>
    </div>
    <div class="max-w-5xl mx-auto text-justify mb-7">
        Мы тщательно выбираем то, что хотим предложить вам. Ни одна вещь не попадает на нашу
        витрину автоматически, как это бывает с традиционными гигантскими торговыми площадками. Мы очень дорожим своей репутацией, поэтому лично
        (и очень придирчиво!) проверяем все размещаемые у нас товары и готовим специально для вас
        подробные обзоры. Вкусный ли торт испёк наш кондитер? Не расходятся ли швы в кошельке?
        Как звучит любимая музыка в новых наушниках? Мы честно расскажем обо всём и никогда
        не предложим вам кота в мешке – у нас вы покупаете только проверенное и качественное!
    </div>
    <div class="flex flex-wrap flex-row content-between max-w-4xl mx-auto sm:text-base md:text-sm lg:text-base">
        <div class="max-w-md sm:max-w-none flex flex-col md:flex-row mx-auto pb-6">
            <div class="mb-3 sm:w-3/4 mx-auto sm:mb-6 md:mb-0 md:w-2/4 md:mr-3">
                <img class="md:flex-shrink-0" src="/img/handcraft.png" alt="handcraft">
            </div>
            <div class="flex bg-forest sm:w-3/4 mx-auto md:w-2/4 md:ml-3">
                <p class="text-white px-5 py-5 sm:px-12 md:py-5 md:px-5 lg:py-14 lg:px-12 self-center">
                    Итак, первое направление,
                    с которого начался Goodion – это уникальные вещи ручной работы от талантливых мастеров
                    и дизайнеров. Мы сами ищем создателей шедевров (а иногда
                    и мастера ищут нас). Мы знаем, как сложно сориентироваться
                    в бескрайних просторах хэндмейда, поэтому предлагаем вам только лично проверенные вещи от настоящих умельцев.
                </p>
            </div>
        </div>
        <div class="max-w-md sm:max-w-none flex flex-col-reverse sm:flex md:flex-row mx-auto pb-6">
            <div class="flex bg-sand sm:mb-6 md:mb-0 sm:w-3/4 mx-auto md:w-2/4 md:mr-3">
                <p class="text-white px-5 py-5 sm:px-12 md:py-5 md:px-5 lg:py-14 lg:px-12 self-center">
                    Отдельная история – это интересные штуки, полезные приспособления, всё новое и необычное. Помните спиннеры?
                    Помните гироскутеры? Мы ищем и находим именно те вещи, которые стремительно врываются в моду. Сегодня вы покупаете их
                    у нас, и только завтра они появляются у всех. С нами вы на шажок опередите время!
                </p>
            </div>
            <div class="mb-3 sm:w-3/4 mx-auto md:mb-0 md:w-2/4 md:ml-3">
                <img class="md:flex-shrink-0" src="/img/trends.png" alt="handcraft">
            </div>
        </div>
        <div class="max-w-md sm:max-w-none flex flex-col md:flex-row mx-auto pb-6">
            <div class="mb-3 sm:w-3/4 mx-auto sm:mb-6 md:mb-0 md:w-2/4 md:mr-3">
                <img class="md:flex-shrink-0" src="/img/sales.png" alt="handcraft">
            </div>
            <div class="flex bg-sky sm:w-3/4 mx-auto md:w-2/4 md:ml-3">
                <p class="px-5 py-5 text-white sm:px-12 md:py-5 md:px-5 lg:py-14 lg:px-12 self-center">
                    Наконец, именно здесь мы собираем для вас специальные предложения, а также акции и распродажи
                    напрямую от поставщиков, некоторые из которых становятся нашими партнёрами. От техники
                    до бытовых товаров и аксессуаров для дома – не тратьте время на поиск и приходите к нам, чтобы
                    сэкономить!
                </p>
            </div>
        </div>
    </div>
</x-base-container>
