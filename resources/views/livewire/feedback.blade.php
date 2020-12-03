@section('title', 'Обратная связь')

<div class="bg-main-bg-color">
    <div class="container xl:px-13 mx-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-graphite">
            <form class="pt-15">
                @guest
                    <div>
                        <label class="font-medium" for="email">Введите E-mail</label>
                        <input class="focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal mb-10" type="email" id="email" name="email">
                    </div>
                    <div>
                        <label class="font-medium" for="phone">или номер телефона</label>
                        <input class="focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal mb-10" type="phone" id="phone" name="phone">
                    </div>
                @endguest
                <label class="font-medium" for="feedback">Вопрос / комментарий</label>
                <textarea class="focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="feedback" rows="4" name="feedback" required></textarea>
                <small id="feedbackHelp">Мы ответим вам максимально быстро.</small>
                <div class="mt-5">
                    <button type="submit" class="inline-flex justify-center w-auto px-4 py-2 text-white bg-forest rounded hover:bg-forest">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
