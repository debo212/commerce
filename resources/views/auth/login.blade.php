<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Inclure les fichiers CSS et JS de intl-tel-input -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"  href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet"  href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet"  href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="shortcut icon"  href="{{ asset('images/favicon.png') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
            <div class=" h-28 -mt-24">
                    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="mx-auto w-64 h-64 mb-5">
            </div>
            <div class="text-center mt-20">
                    <h2 class="text-2xl font-semibold text-gray-700">Créer un compte</h2>
                    <p class="text-md text-gray-500">Remplissez les détails pour vous inscrire</p>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-[380px] h-10 px-4 py-2 border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="relative w-[380px]">
                    <x-input-label for="password" :value="__('Mot de passe')" />
                    <x-text-input id="password" class="block mt-1 w-full h-10 px-4 py-2 border border-gray-500 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="password" name="password" required autocomplete="new-password" />
                    <button type="button" class="absolute inset-y-[42px] right-0 flex items-center mr-3 pt-[10px] " onclick="togglePassword('password', 'password-eye')">
                        <svg id="password-eye" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>
                        </svg>
                    </button>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

               <div class="pt-6">
                        <button type="submit" class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-semibold rounded-lg text-lg py-2.5 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-900 w-[350px] text-center ml-3">
                            {{ __('Se Connecter') }}
                        </button>
                    </div>

                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-black text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-900">{{ __('Se souvenir de moi') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-900 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                    @endif
                </div>

                <div class="text-center text-md text-gray-900">
                    Vous n'avez pas de compte ?
                    <a href="{{ route('register') }}" class="text-blue-900 hover:underline">Créer</a>
                </div>
            </form>
        </div>
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
                ? '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>'
                : '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>';
        }
    </script>
</body>
</html>
