<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img style="width:160px" src="assets/images/logo.png" alt="mydoctor">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-jet-label for="name" value="{{ __('First Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            </div>
            <div>
                <x-jet-label for="dob" value="{{ __('Date of Birth') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus autocomplete="dob" />
            </div>
            <div>
                <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            </div>
            <div>
                <x-jet-label for="user_type" value="{{ __('You are ?') }}" />
                <select id="user_type"  class="block mt-1 w-full" name="user_type">
                    <option value="1">
                        Patient
                    </option>
                    <option value="2" >
                        Doctor
                    </option>
                </select>            
            </div>
            <div style="display: none" class="doc_speciality">
                <x-jet-label for="doc_speciality" value="{{ __('Your speciality') }}"/>
                <select id="doc_speciality"  class="block mt-1 w-full" name="doc_speciality">
                    <option value="1">
                        Allergy and immunology
                    </option>
                    <option value="2" >
                        Anesthesiology
                    </option>
                    <option value="3" >
                        Diagnostic radiology
                    </option>
                    <option value="4" >
                        Emergency medicine
                    </option>
                    <option value="5" >
                        Emergency medicine
                    </option>
                </select>            
            </div>
            <div>
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        <script>
            const selectElement = document.querySelector('#user_type');
            selectElement.addEventListener('change', (event) => {
                const result = document.querySelector('.result');
            if(event.target.value == "2") {
                document.querySelector(".doc_speciality").style.display = "block"
            } else {
                document.querySelector(".doc_speciality").style.display = "none"
            }
        });
        </script>
    </x-jet-authentication-card>
</x-guest-layout>
