@section('title', 'Обратная связь')

<div class="bg-main-bg-color">
    <div class="container xl:px-13 mx-auto">
        <div x-data="{ feedbackForm: true }" @message-sent.window="feedbackForm = false" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-graphite">
            <form x-show="feedbackForm" class="pt-15" wire:submit.prevent="sendMessage">
                @guest
                    <div class="mb-10">
                        <label class="font-medium" for="email">Введите имя</label>
                        <input wire:model.defer="feedback.name" class="@error('feedback.name') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" id="name" name="name">
                        @error('feedback.name') <span class="text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="font-medium" for="email">Введите E-mail</label>
                        <input wire:model.defer="feedback.email" class="@error('feedback.email') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" id="email" name="email">
                        @error('feedback.email') <span class="text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="font-medium" for="phone">или номер телефона</label>
                        <input wire:model.defer="feedback.phone" class="@error('feedback.phone') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="phone" id="phone" name="phone">
                        @error('feedback.phone') <span class="text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                    </div>
                @endguest
                <label class="font-medium" for="message">Вопрос / комментарий</label>
                <textarea wire:model.defer="feedback.message" class="@error('feedback.message') border-red-500 @endError focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="message" rows="4" name="message"></textarea>
                    @error('feedback.message') <span class="text-red-500 text-sm ml-5">{{ $message }}</span> @enderror
                <div id="messageHelp" class="text-sm ml-5">Мы ответим вам максимально быстро.</div>
                <div class="mt-5">
                    <button type="submit" class="inline-flex justify-center w-auto px-4 py-2 text-white bg-forest rounded hover:bg-forest-dark">Отправить</button>
                </div>
            </form>
            <div x-show="! feedbackForm" class="text-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @if (session()->has('message'))
                    <div class="text-forest text-xl font-bold py-24">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
