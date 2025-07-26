<section class="mt-10 space-y-6">
    <h2 class="text-xl font-semibold text-red-700 dark:text-red-500 mb-4">
        {{ __('Delete Account') }}
    </h2>

    <p class="text-sm text-gray-600 dark:text-gray-400">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
    </p>

    <button x-data x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 space-y-4">
            @csrf
            @method('delete')

            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{ __('Please enter your password to confirm.') }}
            </p>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    {{ __('Password') }}
                </label>
                <input id="password" name="password" type="password"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                       placeholder="{{ __('Password') }}">
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end gap-4">
                <button type="button"
                        x-on:click="$dispatch('close')"
                        class="text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    {{ __('Cancel') }}
                </button>

                <button type="submit"
                        class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>



{{--<section class="space-y-6">--}}
{{--    <header>--}}
{{--        <h2 class="text-lg font-medium text-gray-900">--}}
{{--            {{ __('Delete Account') }}--}}
{{--        </h2>--}}

{{--        <p class="mt-1 text-sm text-gray-600">--}}
{{--            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}--}}
{{--        </p>--}}
{{--    </header>--}}

{{--    <x-danger-button--}}
{{--        x-data=""--}}
{{--        x-on:click.prevent="$dispatch('open-modal', 'confirm-users-deletion')"--}}
{{--    >{{ __('Delete Account') }}</x-danger-button>--}}

{{--    <x-modal name="confirm-users-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>--}}
{{--        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">--}}
{{--            @csrf--}}
{{--            @method('delete')--}}

{{--            <h2 class="text-lg font-medium text-gray-900">--}}
{{--                {{ __('Are you sure you want to delete your account?') }}--}}
{{--            </h2>--}}

{{--            <p class="mt-1 text-sm text-gray-600">--}}
{{--                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}--}}
{{--            </p>--}}

{{--            <div class="mt-6">--}}
{{--                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />--}}

{{--                <x-text-input--}}
{{--                    id="password"--}}
{{--                    name="password"--}}
{{--                    type="password"--}}
{{--                    class="mt-1 block w-3/4"--}}
{{--                    placeholder="{{ __('Password') }}"--}}
{{--                />--}}

{{--                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <div class="mt-6 flex justify-end">--}}
{{--                <x-secondary-button x-on:click="$dispatch('close')">--}}
{{--                    {{ __('Cancel') }}--}}
{{--                </x-secondary-button>--}}

{{--                <x-danger-button class="ms-3">--}}
{{--                    {{ __('Delete Account') }}--}}
{{--                </x-danger-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-modal>--}}
{{--</section>--}}
