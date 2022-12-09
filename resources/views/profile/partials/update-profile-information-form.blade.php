<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}"  enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" class="mt-1 block w-full" :value="old('username', $user->username)" required autofocus autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>

        <div>
            <x-input-label for="firstname" :value="__('First Name')" />
            <x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full" :value="old('firstname', $user->firstname)" required autofocus autocomplete="firstname" />
            <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
        </div>

        <div>
            <x-input-label for="lastname" :value="__('Last Name')" />
            <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full" :value="old('lastname', $user->lastname)" required autofocus autocomplete="lastname" />
            <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="notelp" :value="__('Nomor Telepon')" />
            <x-text-input id="notelp" name="notelp" type="text" class="mt-1 block w-full" :value="old('notelp', $user->notelp)" required autofocus autocomplete="notelp" />
            <x-input-error class="mt-2" :messages="$errors->get('notelp')" />
        </div>

        <div>
            <x-input-label for="company" :value="__('Company')" />
            <x-text-input id="company" name="company" type="text" class="mt-1 block w-full" :value="old('company', $user->company)" required autofocus autocomplete="company" />
            <x-input-error class="mt-2" :messages="$errors->get('company')" />
        </div>

        <div>
            <x-input-label for="country" :value="__('Country')" />
            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" :value="old('country', $user->country)" required autofocus autocomplete="country" />
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>

        <div>
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $user->city)" required autofocus autocomplete="city" />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="npwp" :value="__('NPWP')" />
            <x-text-input id="npwp" name="npwp" type="text" class="mt-1 block w-full" :value="old('npwp', $user->npwp)" required autofocus autocomplete="npwp" />
            <x-input-error class="mt-2" :messages="$errors->get('npwp')" />
        </div>

        <div>
            <x-input-label for="nib" :value="__('NIB')" />
            <x-text-input id="nib" name="nib" type="text" class="mt-1 block w-full" :value="old('nib', $user->nib)" required autofocus autocomplete="nib" />
            <x-input-error class="mt-2" :messages="$errors->get('nib')" />
        </div>

        Photo: <img src="{{ asset('app/'.$user->photo )}}" style="width: 300px;" class="mt-2"/>

        <div>
            <x-input-label for="photo" :value="__('Photo')" />
            <x-text-input id="photo" name="photo" type="file" class="mt-1 block w-full" :value="old('photo', $user->photo)" autofocus autocomplete="photo" />
            <x-input-error class="mt-2" :messages="$errors->get('photo')" />
        </div>
        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
