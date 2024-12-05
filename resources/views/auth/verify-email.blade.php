<x-guest-layout>
   <div class=" w-[400px]">
        <div class="mb-8 text-center">
            <p class="text-gray-600">
                {{ __('Merci de vous être inscrit ! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer par e-mail ? Si vous n\'avez pas reçu l\'e-mail, nous vous en enverrons volontiers un autre.') }}
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-8 text-center">
                <p class="font-medium text-green-600">
                    {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse e-mail que vous avez fournie lors de l\'inscription.') }}
                </p>
            </div>
        @endif

        <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full md:w-auto">
                @csrf
                <button type="submit" class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-900">
                    {{ __('Renvoyer l\'e-mail de vérification') }}
                </button>

            </form>


            <form method="POST" action="{{ route('logout') }}" class="w-full md:w-auto">
                @csrf
                <button type="submit" class="w-full md:w-auto underline text-sm text-gray-600 hover:text-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Se déconnecter') }}
                </button>
            </form>
        </div>
   </div>
</x-guest-layout>
