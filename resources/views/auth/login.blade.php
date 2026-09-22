<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - ADS | Tech</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/AdsTech.png') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Tailwind Custom Config -->
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: { navy: '#0B1F33', dark: '#071524', blue: '#2563EB', 'blue-hover': '#1D4ED8', pale: '#EFF6FF', slate: '#5A6E82' }
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased selection:bg-brand-blue selection:text-white flex flex-col min-h-screen">
    
    <!-- Tombol Kembali ke Beranda -->
    <div class="absolute top-6 left-6 sm:top-8 sm:left-10">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-brand-blue transition-colors group">
            <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Beranda
        </a>
    </div>

    <!-- Container Utama -->
    <div class="flex-1 flex flex-col justify-center items-center px-6 py-12">
        
        <!-- Logo Area -->
        <div class="mb-8 text-center sm:mx-auto sm:w-full sm:max-w-md">
            <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm border border-slate-100 transition-transform hover:scale-105">
                <img src="{{ asset('images/AdsTech.png') }}" alt="ADS Tech Logo" class="w-12 h-12 object-contain">
            </div>
            <h2 class="text-3xl font-extrabold text-brand-navy tracking-tight">Portal Admin</h2>
            <p class="text-sm font-medium text-slate-500 mt-2">Silakan masuk untuk mengelola sistem Anda</p>
        </div>

        <!-- Login Card -->
        <div class="w-full sm:max-w-md bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 rounded-3xl px-8 py-10">
            
            <!-- Session Status (Perbaikan) -->
            @if (session('status'))
                <div class="mb-5 font-medium text-sm text-emerald-600 bg-emerald-50 px-4 py-3 rounded-xl border border-emerald-200">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-bold text-brand-navy mb-1.5">Alamat Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                        class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3.5 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" 
                        placeholder="admin@adstech.id">
                    
                    <!-- Input Error (Perbaikan) -->
                    @error('email')
                        <p class="mt-2 text-red-500 text-xs font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-bold text-brand-navy mb-1.5">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" 
                        class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3.5 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" 
                        placeholder="••••••••">
                    
                    <!-- Input Error (Perbaikan) -->
                    @error('password')
                        <p class="mt-2 text-red-500 text-xs font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                        <input id="remember_me" type="checkbox" name="remember" 
                            class="rounded border-slate-300 text-brand-blue shadow-sm focus:ring-brand-blue w-4 h-4 transition-colors cursor-pointer">
                        <span class="ms-2.5 text-sm font-semibold text-slate-600 group-hover:text-brand-navy transition-colors">Ingat Saya</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" 
                        class="w-full inline-flex items-center justify-center py-3.5 px-4 rounded-full shadow-md text-sm font-bold text-white bg-brand-blue hover:bg-brand-blue-hover focus:outline-none focus:ring-4 focus:ring-brand-blue/20 transition-all">
                        Masuk ke Dashboard
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="pb-8 text-center text-xs font-medium text-slate-400">
        &copy; 2026 ADS | Tech. Hak Cipta Dilindungi Undang-Undang.
    </div>

</body>
</html>