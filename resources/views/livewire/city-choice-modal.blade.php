<div class="absolute z-50 top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);"
     x-data="{ 'cityModal': false }"
     x-on:city-modal-open.window="cityModal = open, $dispatch('modal-toggle')"
     x-on:city-modal-close.window="cityModal = close, $dispatch('modal-toggle')"

     x-show="cityModal"
     x-cloak

     x-transition:enter="transition ease-out duration-150"
     x-transition:enter-start="opacity-0 transform scale-90"
     x-transition:enter-end="opacity-100 transform scale-100"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100 transform scale-100"
     x-transition:leave-end="opacity-0 transform scale-90"
>

    <div x-on:mousedown.away="$dispatch('city-modal-close')" class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg font-medium leading-6 text-graphite">
                Выберите Ваш город:
            </h3>

            <div class="mt-2">
                <form>
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
                    <input id="city" type="text" x-ref="currentCity" class="focus:outline-none focus:ring-2 ring-forest border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" name="city" value="{{ old('city') }}" required autocomplete="off" autofocus>
                    @error('city') <span class="text-sm font-semibold mt-2 text-red-700">{{ $message }}</span> @enderror
                    <div class="flex flex-row justify-around w-full rounded-md mt-10">
                        <button
                            x-on:click.prevent="$wire.setCurrentCity(city.value)"
                            class="inline-flex justify-center w-auto px-4 py-2 text-white bg-forest rounded hover:bg-forest-dark"
                            type="submit"
                        >
                            Сохранить
                        </button>
                        <button
                            x-on:click.prevent="$dispatch('city-modal-close')"
                            class="inline-flex justify-center w-auto px-4 py-2 text-white bg-sand rounded hover:bg-sand-dark"
                        >
                            Закрыть
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
