<x-guest-layout>
    <div class=" text-center">
        <h2 class="text-2xl font-semibold text-gray-700">Créer un compte</h2>
        <p class="text-sm text-gray-500">Remplissez les détails pour vous inscrire</p>
    </div>
    <form method="POST" action="{{ route('register') }}" class="mt-10 space-y-4">
        @csrf
        <div class="grid sm:grid-cols-2 gap-8">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nom')" class="block text-sm font-medium text-gray-700"/>
                <x-text-input id="name"  class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
                <x-text-input id="email" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Address -->
            <div>
                <x-input-label for="address" :value="__('Adresse')" class="block text-sm font-medium text-gray-700"/>
                <x-text-input id="address" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="text" name="address" :value="old('address')" required />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div>
                <x-input-label for="phone" :value="__('Téléphone')" class="block text-sm font-medium text-gray-700" />
                <x-text-input id="phone" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="text" name="phone" :value="old('phone')" required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="relative">
                <x-input-label for="password" :value="__('Mot de passe')" class="block text-sm font-medium text-gray-700" />
                <x-text-input id="password" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="password" name="password" required autocomplete="new-password" />
                <button type="button" class="absolute inset-y-0 right-0 flex items-center pt-5 pr-3" onclick="togglePassword('password', 'password-eye')">
                    <svg id="password-eye" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                       <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                </button>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="relative">
                <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" class="block text-sm font-medium text-gray-700" />
                <x-text-input id="password_confirmation" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                <button type="button" class="absolute inset-y-0 right-0 flex items-center pt-5 pr-3" onclick="togglePassword('password_confirmation', 'password-confirm-eye')">
                    <svg id="password-confirm-eye" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                </button>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>


         <x-primary-button class="mt-6">
                {{ __(" S'inscrire ") }}
        </x-primary-button>
       <div class="mt-4 text-center">
          <p class="text-sm text-gray-600">
            Déjà inscrit?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Se connecter</a>
          </p>
        </div>
    </form>

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
                ?`<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>`
                :`<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><line x1="1" y1="1" x2="23" y2="23"></line>`;

        }
    </script>
</x-guest-layout>
