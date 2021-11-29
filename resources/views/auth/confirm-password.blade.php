<x-guest-layout>
    <x-jet-authentication-card>
        @section('titre')

        Confirmation du mot de passe
            
        @endsection
        <x-slot name="logo">
            <center> <a href="/dashboard"><img src="/assets/images/emyo.png" alt="logo" style="width:30%;margin-bottom:-45px;"></a></center> 
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Veuillez confirmer votre mot de passe avant de continuer
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="Mot de passe" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="m-3">
                <button class="btn btn-primary">
                    Confirmer
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
