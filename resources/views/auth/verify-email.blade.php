<x-guest-layout>
    <x-base-container>
        <div class="mx-auto lg:w-1/2 bg-sky-dark border-2 rounded-t-xl border-sky-dark pl-5 py-3">
            <h2 class="text-white text-xl">Подтверждение E-mail адреса</h2>
        </div>
        <div class="mx-auto px-5 sm:px-16 lg:w-1/2 border-2 border-sky-dark py-10 rounded-b-xl">

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-jet-button type="submit">
                            {{ __('Resend Verification Email') }}
                        </x-jet-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </x-base-container>
</x-guest-layout>
