<div class="flex inline-block justify-start">
    <img class="h-full" src="/img/icon/pin.png" alt="">
    <div
        x-data="{ open: false }"
        x-on:close-modal.window="open = false"
    >
        <a class="ml-2 border-b border-main-black select-none no-outline" href="#" role="button" @click.prevent="open = true">
            {{ $city ?? 'Ваш город'}}
        </a>

        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);"
             x-show="open"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"  >

            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg font-medium leading-6 text-main-black">
                        Выберите Ваш город:
                    </h3>

                    <div class="mt-2">
                        <form wire:submit.prevent="setCurrentCity">
                            @csrf
                            <div class="flex flex-row flex-wrap border-b border-t border-gray-300 mb-5">
                                @foreach($bigCities as $bigCity)
                                    <div class="mr-5 my-3 cursor-pointer font-medium text-sm text-gray-600">
                                        <span
                                            x-on:click="$refs.currentCity.value = '{{ $bigCity }}'"
                                        >
                                            {{ $bigCity }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                            <h3 class="text-lg font-medium leading-6 text-main-black mb-3 sm:mb-6">
                                Или введите вручную:
                            </h3>
                            <input id="city" type="text" x-ref="currentCity" class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" name="city" value="{{ old('city') }}" required autocomplete="off" autofocus>
                            @error('city') <span class="text-sm font-semibold mt-2 text-main-orange">{{ $message }}</span> @enderror
                            <div wire:model.defer="city" class="flex flex-row justify-around w-full rounded-md shadow-sm mt-10">
                                <button
                                    x-on:click="$dispatch('input', city.value)"
                                    class="inline-flex justify-center w-auto px-4 py-2 text-white bg-main-green rounded hover:bg-green-600"
                                    type="submit"
                                >
                                    Сохранить
                                </button>
                                <button
                                    wire:click="$refresh"
                                    x-on:click.prevent="open = false"
                                    class="inline-flex justify-center w-auto px-4 py-2 text-white bg-main-orange rounded hover:bg-orange-300"
                                >
                                    Закрыть
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

