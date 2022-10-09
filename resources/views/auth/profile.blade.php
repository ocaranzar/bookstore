<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('profile.update', strtolower(Auth::user()->username)) }}">
            @csrf
            @method("PATCH")

            <!-- First Name -->
            <div>
                <x-input-label for="first_name" :value="__('First Name')" />

                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name', Auth::user()->first_name)" required autofocus />

                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <x-input-label for="last_name" :value="__('Last Name')" />

                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name', Auth::user()->last_name)" required autofocus />

                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-input-label for="username" :value="__('Username')" />

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username', Auth::user()->username)" required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', Auth::user()->email)" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    @lang("Save")
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('password.update', strtolower(Auth::user()->username)) }}">
            @csrf
            @method("PATCH")

            <!-- Old Password -->
            <div class="mt-4">
                <x-input-label for="old_password" :value="__('Old Password')" />

                <x-text-input id="old_password" class="block mt-1 w-full"
                                type="password"
                                name="old_password"
                                required autocomplete="old_password" />

                <x-input-error :messages="$errors->get('old_password')" class="mt-2" />
            </div>

            <!-- New Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('New Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    @lang("Save")
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
