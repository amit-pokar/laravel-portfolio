<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>

        @if (session('status') === 'profile-updated')
            <div class="mt-4 rounded-lg p-4 text-sm" style="background-color: #ecfdf5; border: 1px solid #bbf7d0; color: #166534;">
                {{ __('Profile is updated successfully!') }}
            </div>
        @endif
    </header>

    <form id="send-verification" method="post" action="{{ route('admin.verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('admin.profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Display Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
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
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $user->first_name)" autocomplete="given-name" />
            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
        </div>

        <div>
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $user->last_name)" autocomplete="family-name" />
            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
        </div>

        <div>
            <x-input-label for="address1" :value="__('Address 1')" />
            <x-text-input id="address1" name="address1" type="text" class="mt-1 block w-full" :value="old('address1', $user->address1)" autocomplete="street-address" />
            <x-input-error class="mt-2" :messages="$errors->get('address1')" />
        </div>

        <div>
            <x-input-label for="address2" :value="__('Address 2')" />
            <x-text-input id="address2" name="address2" type="text" class="mt-1 block w-full" :value="old('address2', $user->address2)" autocomplete="street-address" />
            <x-input-error class="mt-2" :messages="$errors->get('address2')" />
        </div>

        <div>
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $user->city)" autocomplete="address-level2" />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>

        <div>
            <x-input-label for="state" :value="__('State')" />
            <x-text-input id="state" name="state" type="text" class="mt-1 block w-full" :value="old('state', $user->state)" autocomplete="address-level1" />
            <x-input-error class="mt-2" :messages="$errors->get('state')" />
        </div>

        <div>
            <x-input-label for="country" :value="__('Country')" />
            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" :value="old('country', $user->country)" autocomplete="country" />
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>

        <div>
            <x-input-label for="zip_code" :value="__('Zip Code')" />
            <x-text-input id="zip_code" name="zip_code" type="text" class="mt-1 block w-full" :value="old('zip_code', $user->zip_code)" autocomplete="postal-code" />
            <x-input-error class="mt-2" :messages="$errors->get('zip_code')" />
        </div>

        <div>
            <x-input-label for="mobile_number" :value="__('Mobile Number')" />
            <x-text-input id="mobile_number" name="mobile_number" type="text" class="mt-1 block w-full" :value="old('mobile_number', $user->mobile_number)" autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('mobile_number')" />
        </div>

        <div>
            <x-input-label for="profile_photo" :value="__('Profile Photo')" />
            <input id="profile_photo" name="profile_photo" type="file" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" accept="image/*" />
            <x-input-error class="mt-2" :messages="$errors->get('profile_photo')" />
            @if ($user->profile_photo_path)
                <p class="text-sm text-gray-600 mt-2">Current photo: <a href="{{ $user->profile_photo_url }}" target="_blank" class="underline">View</a></p>
            @endif
        </div>

        <div>
            <x-input-label for="professional_summary" :value="__('Professional Summary')" />
            <textarea id="professional_summary" name="professional_summary" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('professional_summary', $user->professional_summary) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('professional_summary')" />
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