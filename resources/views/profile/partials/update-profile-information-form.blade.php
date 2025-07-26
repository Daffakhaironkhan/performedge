<section>
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
        {{ __('Profile Information') }}
    </h2>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                {{ __('Name') }}
            </label>
            <input id="name" name="name" type="text"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                   value="{{ old('name', $users->name) }}" required autofocus>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                {{ __('Email') }}
            </label>
            <input id="email" name="email" type="email"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                   value="{{ old('email', $users->email) }}" required>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($users instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $users->hasVerifiedEmail())
                <div class="mt-2 text-sm text-gray-800 dark:text-gray-300">
                    {{ __('Your email address is unverified.') }}
                    <button form="send-verification" class="ml-2 text-primary-600 hover:underline">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                    class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition
                   x-init="setTimeout(() => show = false, 2000)"
                   class="text-sm text-gray-600 dark:text-gray-300">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>


{{--<section>--}}
{{--    <header>--}}
{{--        <h2 class="text-lg font-medium text-gray-900">--}}
{{--            {{ __('Profile Information') }}--}}
{{--        </h2>--}}

{{--        <p class="mt-1 text-sm text-gray-600">--}}
{{--            {{ __("Update your account's profile information and email address.") }}--}}
{{--        </p>--}}
{{--    </header>--}}

{{--    <form id="send-verification" method="post" action="{{ route('verification.send') }}">--}}
{{--        @csrf--}}
{{--    </form>--}}

{{--    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">--}}
{{--        @csrf--}}
{{--        @method('patch')--}}

{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $users->name)" required autofocus autocomplete="name" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('name')" />--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $users->email)" required autocomplete="username" />--}}
{{--            <x-input-error class="mt-2" :messages="$errors->get('email')" />--}}

{{--            @if ($users instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $users->hasVerifiedEmail())--}}
{{--                <div>--}}
{{--                    <p class="text-sm mt-2 text-gray-800">--}}
{{--                        {{ __('Your email address is unverified.') }}--}}

{{--                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                            {{ __('Click here to re-send the verification email.') }}--}}
{{--                        </button>--}}
{{--                    </p>--}}

{{--                    @if (session('status') === 'verification-link-sent')--}}
{{--                        <p class="mt-2 font-medium text-sm text-green-600">--}}
{{--                            {{ __('A new verification link has been sent to your email address.') }}--}}
{{--                        </p>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}

{{--        <div class="flex items-center gap-4">--}}
{{--            <x-primary-button>{{ __('Save') }}</x-primary-button>--}}

{{--            @if (session('status') === 'profile-updated')--}}
{{--                <p--}}
{{--                    x-data="{ show: true }"--}}
{{--                    x-show="show"--}}
{{--                    x-transition--}}
{{--                    x-init="setTimeout(() => show = false, 2000)"--}}
{{--                    class="text-sm text-gray-600"--}}
{{--                >{{ __('Saved.') }}</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</section>--}}
