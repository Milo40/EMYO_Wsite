<x-guest-layout>
    <x-jet-authentication-card>
        @section('titre')

        Connexion
            
        @endsection
        <x-slot name="logo">
            <center> <a href="/dashboard"><img src="/assets/images/emyo.png" alt="logo" style="width:30%;margin-bottom:-45px;"></a></center> 
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            <center><small class="text-muted m-2">Connexion</small></center>
            @csrf

            <div>
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Mot de passe" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>
                @endif

                <button class="btn btn-primary m-3"> Se connecter </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
