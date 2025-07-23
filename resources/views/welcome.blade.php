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
            padding: 2.5rem;
            transition: all 0.3s ease-in-out;
            width: 600px;
        }

        .glass-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.1);
        }

        .divider {
            height: 0.5px;
            background-color: rgba(255, 255, 255, 0.3);
            margin: 1.5rem 0;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-cover bg-center min-h-screen text-white" style="background-image: url('{{ asset('images/bg.jpg') }}');">

<div class="bg-black bg-opacity-70 min-h-screen w-full flex items-center justify-center px-4">
    <div class="glass-card max-w-md w-full text-center fade-in shadow-lg">

        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}"
                 alt="PerformEdge Logo"
                 class="h-20 w-20 rounded-full border-4 border-white shadow-lg object-contain">
        </div>

        <h1 class="text-2xl md:text-3xl font-bold mb-2 text-center">
            Selamat Datang di PerformEdge!
        </h1>

        <p class="text-base text-white/80 mb-6 px-2">
            Tingkatkan kualitas monitoring dan evaluasi performa agent secara efisien.
        </p>

        <a href="{{ route('login') }}"
           class="block w-full text-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 transition">
            Masuk
        </a>
        <br>
        <p class="text-sm text-white/70 text-center">Don't have an account?</p>

        <div class="divider"></div>

        <a href="{{ route('register') }}"
           class="block w-full text-center px-6 py-3 bg-gray-500 text-white font-semibold rounded-md shadow hover:bg-gray-600 transition">
            Daftar
        </a>

        <p class="text-xs text-white/50 mt-6">&copy; {{ date('Y') }} PerformEdge. All rights reserved.</p>
    </div>
</div>

</body>
</html>



