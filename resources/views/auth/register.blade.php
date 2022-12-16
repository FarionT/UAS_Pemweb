<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Username -->
            <div>
                <x-input-label for="username" :value="__('Username')" />
                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- First Name -->
            <div>
                <x-input-label for="firstname" :value="__('First Name')" />
                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="lastname" :value="__('Last Name')" />
                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Company -->
            <div class="mt-4">
                <x-input-label for="company" :value="__('Company')" />
                <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required />
                <x-input-error :messages="$errors->get('company')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Email Company -->
            <div class="mt-4">
                <x-input-label for="emailcompany" :value="__('Email Company')" />
                <x-text-input id="emailcompany" class="block mt-1 w-full" type="email" name="emailcompany" :value="old('emailcompany')" required />
                <x-input-error :messages="$errors->get('emailcompany')" class="mt-2" />
            </div>

            <!-- Nomor Telepon -->
            <div class="mt-4">
                <x-input-label for="notelp" :value="__('Nomor Telepon')" />
                <x-text-input id="notelp" class="block mt-1 w-full" type="text" name="notelp" :value="old('notelp')" required />
                <x-input-error :messages="$errors->get('notelp')" class="mt-2" />
            </div>

            <!-- NPWP -->
            <div class="mt-4">
                <x-input-label for="npwp" :value="__('NPWP')" />
                <x-text-input id="npwp" class="block mt-1 w-full" type="text" name="npwp" :value="old('npwp')" required />
                <x-input-error :messages="$errors->get('npwp')" class="mt-2" />
            </div>

            <!-- NIB -->
            <div class="mt-4">
                <x-input-label for="nib" :value="__('NIB')" />
                <x-text-input id="nib" class="block mt-1 w-full" type="text" name="nib" :value="old('nib')" required />
                <x-input-error :messages="$errors->get('nib')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" :value="__('Photo')" />
                <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" />
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

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
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
