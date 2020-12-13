@section('title', 'Обратная связь')

<x-base-container>
    <x-slot name="title">
        Обратная связь
    </x-slot>
    <div x-data="{ feedbackForm: true }" @message-sent.window="feedbackForm = false, window.scrollTo(0,0);">
        <div class="mx-auto lg:w-1/2 bg-sky-dark border-2 rounded-t-xl border-sky-dark pl-5 py-3">
            <h2 x-show="feedbackForm" class="text-white text-xl">Будем рады получить от вас вопрос или отзыв!</h2>
            <h2 x-show="! feedbackForm" x-cloak="feedbackForm" class="text-white text-xl">Спасибо за обращение!</h2>
        </div>
        <div class="mx-auto px-5 lg:w-1/2 border-2 border-sky-dark py-10 sm:px-16 rounded-b-xl">
            <form x-show="feedbackForm" class="pt-15" wire:submit.prevent="sendMessage">
                @guest
                    <div class="mb-10">
                        <label class="font-medium" for="name">Представьтесь, пожалуйста</label>
                        <input wire:model.defer="feedback.name" class="@error('feedback.name') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" id="name" name="name" placeholder="Имя">
                        @error('feedback.name') <span class="font-normal text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-7 font-medium">
                        Оставьте <label for="email">E-mail</label> или <label for="phone">номер мобильного телефона</label>
                        <input wire:model.defer="feedback.email" class="@error('feedback.email') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="email" id="email" name="email" placeholder="E-mail">
                        @error('feedback.email') <span class="font-normal text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <input wire:model.defer="feedback.phone" class="@error('feedback.phone') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="tel" id="phone" name="phone" placeholder="Телефон">
                        @error('feedback.phone') <span class="font-normal text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                    </div>
                @endguest
                <label class="font-medium" for="message">Ваш вопрос или комментарий</label>
                <textarea wire:model.defer="feedback.message" class="@error('feedback.message') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="message" rows="4" name="message"></textarea>
                @error('feedback.message') <span class="font-normal text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                <div id="messageHelp" class="text-sm ml-5">Мы ответим вам максимально быстро.</div>
                <div class="mt-10 text-center">
                    <button type="submit" class="inline-flex justify-center w-auto px-4 py-2 text-white bg-forest rounded hover:bg-forest-dark">Отправить</button>
                </div>
            </form>
            <div x-show="! feedbackForm" x-cloak="feedbackForm" class="text-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @if (session()->has('message'))
                    <div class="text-sky-dark text-xl font-bold py-12">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-base-container>
