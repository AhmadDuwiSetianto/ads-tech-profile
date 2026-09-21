<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - ADS | Tech</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-blue-600 selection:text-white">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        
        <!-- Logo Area -->
        <div class="mb-8 text-center">
            <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-blue-600/30">
                <span class="text-2xl font-bold text-white">ADS</span>
            </div>
            <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Admin Portal</h1>
            <p class="text-sm text-slate-500 mt-1">Masuk untuk mengelola konten website</p>
        </div>

        <!-- Login Card -->
        <div class="w-full sm:max-w-md mt-2 px-8 py-10 bg-white shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden sm:rounded-2xl">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block font-medium text-sm text-slate-700">Email Address</label>
                    <input id="email" class="block mt-1 w-full rounded-lg border-slate-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs" />
                </div>

                <!-- Password -->
                <div class="mt-6">
                    <div class="flex justify-between items-center">
                        <label for="password" class="block font-medium text-sm text-slate-700">Password</label>
                    </div>
                    <input id="password" class="block mt-1 w-full rounded-lg border-slate-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm transition" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ms-2 text-sm text-slate-600">Ingat Saya</span>
                    </label>
                </div>

                <div class="mt-8">
                    <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Masuk ke Dashboard
                    </button>
                </div>
            </form>
        </div>
        
        <div class="mt-8 text-xs text-slate-400">
            &copy; 2026 ADS | Tech. All rights reserved.
        </div>
    </div>
</body>
</html>