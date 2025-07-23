<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - PerformEdge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            to { opacity: 1; }
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 2rem; /* sebelumnya mungkin 2.5rem atau lebih */
            width: 100%;
            max-width: 400px; /* ini membatasi ukuran maksimum */
        }
    </style>
</head>
<body class="bg-cover bg-center min-h-screen text-white" style="background-image: url('{{ asset('images/bg.jpg') }}');">

<div class="bg-black bg-opacity-70 min-h-screen w-full flex items-center justify-center px-4">

    <div class="glass-card w-full max-w-md fade-in">
        {{-- Logo --}}
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}"
                 alt="PerformEdge Logo"
                 class="h-16 w-16 rounded-full border-4 border-white shadow-md object-contain">
        </div>

        {{-- Session Status --}}
        <x-auth-session-status class="mb-4" :status="session('status')" />

        {{-- Form --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                              class="block mt-1 w-full" autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password"
                              type="password"
                              name="password"
                              required
                              autocomplete="current-password"
                              class="block mt-1 w-full text-black"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Remember Me --}}
            <div class="block mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded bg-gray-100 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                           name="remember">
                    <span class="ms-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
                </label>
            </div>

            {{-- Buttons --}}
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-300 hover:text-white" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <div class="flex items-center gap-3">
                    <x-primary-button class="w-full sm:w-auto">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>

</div>

</body>
</html>
