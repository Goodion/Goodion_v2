@section('title', 'Доставка и оплата')

<x-slot name="header">
    @include('layouts.header')
</x-slot>

<div class="bg-main-bg-color">
    <div class="container xl:px-13 mx-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-main-black">
            <div class="pt-15">
                <h2 class="font-bold text-xl">Мы доставляем…</h2>
                <h3 class="font-semibold underline pl-3 my-3 text-lg">Вам домой или на работу – курьером</h3>
                <div class="pl-3">
                    <p>
                        Для Москвы и Московской области доступна быстрая курьерская доставка в следующие временные интервалы:<br />
                        10:00 – 18:00, 14:00 – 21:00 или 18:00 – 22:00 – для Москвы<br />
                        10:00 – 22:00 – для Московской области
                    </p>
                    <p>
                        А при оформлении и подтверждении заказа до 20:00 курьер привезёт его вам уже на следующий день!
                    </p>
                    <p>
                        В регионах доставка силами курьерских компаний возможна по согласованию.
                    </p>
                </div>
                <h3 class="font-semibold underline pl-3 my-3 text-lg">До пункта самовывоза – транспортной компанией</h3>
                <div class="pl-3">
                    <p>
                        Мы работаем со всеми основными курьерскими компаниями – СДЭК, IML, Boxberry и другими. Практически
                        в любом городе России доступно большое количество точек самовывоза – выберите самую удобную!
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap justify-around my-10">
                <img src="/img/delivery_companies_logos/iml.png" alt="iml">
                <img src="/img/delivery_companies_logos/cdek.png" alt="cdek">
                <img src="/img/delivery_companies_logos/boxberry.png" alt="boxberry">
            </div>
            <div class="flex flex-wrap justify-around align-middle my-10">
                <img src="/img/delivery_companies_logos/dellin.png" alt="dellin">
                <img src="/img/delivery_companies_logos/pek.png" alt="pek">
                <img src="/img/delivery_companies_logos/geldor.png" alt="geldor">

            </div>
            <div class="col-md-10 m-auto text__box p-4 right text-right">
                <h2 class="font-bold text-xl text-right">…Вы оплачиваете</h2>
                <h3 class="font-semibold underline pr-3 my-3 text-lg">Наличными или картой – при получении заказа</h3>
                <div class="pr-3">
                    <p>
                        Оплата наличными доступна для всех способов доставки – вы можете оплатить заказ при получении у
                        курьера или в пункте самовывоза.
                    </p>
                </div>
                <h3 class="font-semibold underline pr-3 my-3 text-lg">Банковским переводом – при оформлении заказа</h3>
                <div class="pr-3">
                    <p>
                        После подтверждения заказа менеджер выставляет вам счёт и резервирует товар на 3 дня – в течение
                        этого времени необходимо оплатить заказ и сообщить менеджеру.
                    </p>
                </div>
                <h3 class="font-semibold underline pr-3 my-3 text-lg">! Обращаем внимание:</h3>
                <div class="pr-3">
                    <p>
                        - в настоящий момент окончательная стоимость доставки рассчитывается менеджером при оформлении заказа
                    </p>
                    <p>
                        - доставка некоторыми транспортными компаниями возможна только со 100% предоплатой заказа
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<x-slot name="footer">
    @include('layouts.footer')
</x-slot>
