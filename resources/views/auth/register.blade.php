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
        <link rel="stylesheet"  href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
        <link rel="shortcut icon"  href="{{ asset('images/favicon.png') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body lass="font-sans text-gray-900 antialiased">
    <div class="min-h-full flex flex-col sm:justify-center items-center pt-1 sm:pt-0 bg-gray-100">

        <div class="flex items-center justify-center min-h-screen bg-gray-100 w-[700px]">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-[750px] w-full">
                <div class=" h-28 -mt-24">
                    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="mx-auto w-64 h-64 mb-5">

                </div>
                <div class="text-center mt-[60px]">
                    <h2 class="text-2xl font-semibold text-gray-700">Créer un compte</h2>
                    <p class="text-md text-gray-500">Remplissez les détails pour vous inscrire</p>
                </div>
                <form method="POST" action="{{ route('register') }}" class="mt-4 space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Name -->
                        <div class="">
                            <x-input-label for="name" :value="__('Nom')" class="block text-md font-medium text-gray-700"/>
                            <x-text-input id="name" class="mt-1 w-[300px] h-10 px-4 py-2 border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" class="block text-md font-medium text-gray-700" />
                            <x-text-input id="email" class="mt-1 w-[300px] h-10 px-4 py-2 border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Address -->
                        <div class="">
                            <x-input-label for="address" :value="__('Adresse')" class="block text-md font-medium text-gray-700"/>
                            <x-text-input id="address" class="mt-1 w-[300px] h-10 px-4 py-2 border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="text" name="address" :value="old('address')" required />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-input-label for="phone" :value="__('Téléphone')" class="block text-md font-medium text-gray-700" />
                            <x-text-input id="phone" class="mt-1 w-[300px] h-10 px-4 py-2 border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="text" name="phone" :value="old('phone')" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="relative">
                            <x-input-label for="password" :value="__('Mot de passe')" class="block text-md font-medium text-gray-700" />
                            <x-text-input id="password" class="mt-1 w-[300px] h-10 px-4 py-2 border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 pr-10" type="password" name="password" required autocomplete="new-password" />
                            <button type="button" class="absolute inset-y-[42px] right-0 flex items-center mr-5 pt-[10px]" onclick="togglePassword('password', 'password-eye')">
                                <svg id="password-eye" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="3" x2="22" y2="21"></line>
                                </svg>
                            </button>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="relative">
                            <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" class="block text-md font-medium text-gray-700" />
                            <x-text-input id="password_confirmation" class="mt-1 w-[300px] h-10 px-4 py-2 border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 pr-10" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <button type="button" class="absolute inset-y-[42px] right-0 flex items-center mr-5 pt-[10px] " onclick="togglePassword('password_confirmation', 'password-confirm-eye')">
                                <svg id="password-confirm-eye" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="3" x2="22" y2="21"></line>
                                </svg>
                            </button>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-semibold rounded-lg text-lg py-2.5 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-900 w-[400px] text-center ml-32">
                            {{ __('S\'inscrire') }}
                        </button>
                    </div>

                    <div class="mt-6 text-center">
                        <p class="text-md text-gray-900">
                            Déjà inscrit?
                            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Se connecter</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var input = document.querySelector("#phone");
                window.intlTelInput(input, {
                    initialCountry: "auto",
                    geoIpLookup: function(callback) {
                        fetch('https://ipapi.co/json')
                            .then(function(response) { return response.json(); })
                            .then(function(data) { callback(data.country_code); })
                            .catch(function() { callback("us"); });
                    },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js"
                });
            });

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
    </div>
</body>
</html>
