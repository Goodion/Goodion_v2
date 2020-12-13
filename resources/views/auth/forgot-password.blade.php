<x-app-layout>
    <x-base-container>
        <div class="mx-auto lg:w-1/2 bg-sky-dark border-2 rounded-t-xl border-sky-dark pl-5 py-3">
            <h2 class="text-white text-xl">Восстановление пароля</h2>
        </div>
        <div class="mx-auto px-5 sm:px-16 lg:w-1/2 border-2 border-sky-dark py-10 rounded-b-xl">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-base-container>
</x-app-layout>
