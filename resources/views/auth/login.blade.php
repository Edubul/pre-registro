<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 text-black">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-blue-800 bg-opacity-30 border-b-2 border-yellow-400 shadow-md overflow-hidden sm:rounded-lg">
            <x-jet-validation-errors class="mb-4"/>

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
            </div>
            @endif
            
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                    <label class="text-white" for="username">{{__('Master Account Username')}}</label>
                    <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                </div>

                <div class="mt-4">
                    <label class="text-white" for="email">{{__('Password')}}</label>
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                    <x-jet-button class="ml-4 bg-yellow-500 hover:bg-yellow-600">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
