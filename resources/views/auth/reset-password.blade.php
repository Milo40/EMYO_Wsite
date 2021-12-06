<x-guest-layout>
    <x-jet-authentication-card>
        @section('titre')

        Réinitialisation du mot de passe
            
        @endsection
        <x-slot name="logo">
            <center> <a href="/"><img src="/assets/images/emyo.png" alt="logo" style="width:30%;margin-bottom:-45px;"></a></center>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Mot de passe" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="Confirmation du mot de passe" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="m-3">
                <button class="btn btn-primary">
                    Réinitialiser
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
