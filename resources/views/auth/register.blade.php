<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar - PerformEdge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('images/bg.jpg') }}');">

<div class="w-full px-4">
    <div class="glass-card mx-auto text-white">
        {{-- Logo --}}
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-16 rounded-full border border-white shadow-lg">
        </div>

        {{-- Register Form --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-white" />
                <x-text-input id="name" class="block mt-1 w-full bg-white text-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-white" />
                <x-text-input id="email" class="block mt-1 w-full bg-white text-black" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-white" />
                <x-text-input id="password" class="block mt-1 w-full bg-white text-black" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full bg-white text-black" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a class="underline text-sm text-gray-300 hover:text-white" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
