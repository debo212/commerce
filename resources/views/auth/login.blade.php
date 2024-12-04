<x-guest-layout>
    <!-- Session Status -->
    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="mx-auto w-48 h-48">
    <div class=" text-center">
        <h2 class="text-2xl font-semibold text-gray-700">Bonjour! commençons</h2>
        <p class="text-sm text-gray-500">Connectez-vous pour continuer.</p>
    </div>
    <div class="mt-10">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}" class="mt-10 space-y-4">
            @csrf
            <div class="grid sm:grid-cols-1 gap-4">
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="pt-4">
                    <div class="relative">
                        <x-input-label for="password" :value="__('Mot de passe')" class="block text-lg font-medium text-gray-700" />
                        <x-text-input id="password" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="password" name="password" required autocomplete="new-password" />
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center pt-5 pr-3" onclick="togglePassword('password', 'password-eye')">
                            <svg id="password-eye" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-semibold rounded-lg text-lg  py-2.5 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-900 w-full text-center md:w-full lg:w-full xl:w-full sm:w-20">
                        {{ __('Se Connecter') }}
                    </button>
            </div>

                <!-- Remember Me -->
                <div class="pt-4 flex justify-between items-center">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-black text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-md text-gray-800">{{ __('Se souvenir de moi') }}</span>
                    </label>

                    <div class="flex items-center justify-end">
                        @if (Route::has('password.request'))
                            <a class="underline text-md text-black hover:text-indigo-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="pt-4">
                    <div class="text-center mt-4 font-weight-light">
                        Vous n'avez pas de compte ?
                        <a href="{{ route('register') }}" class="text-blue-900 hover:underline">Créer</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- JavaScript -->
    <script>
        function togglePassword(inputId, eyeId) {
            const input = document.getElementById(inputId);
            const eye = document.getElementById(eyeId);
            const isPasswordVisible = input.type === 'password';

            // Toggle input type
            input.type = isPasswordVisible ? 'text' : 'password';

            // Update eye icon
            eye.innerHTML = isPasswordVisible
                ? `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>`
                : `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>`;
        }
    </script>
</x-guest-layout>
