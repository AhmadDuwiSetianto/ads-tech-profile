<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portal - ADS | Tech</title>
    
    <link rel="icon" type="image/png" href="{{ asset('images/AdsTech.png') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind Config & Script (Diselaraskan dengan Frontend) -->
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
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden selection:bg-brand-blue selection:text-white">
    
    <!-- Sidebar Kiri (Brand Navy) -->
    <aside class="w-72 bg-brand-navy text-white flex flex-col shadow-2xl z-20 hidden lg:flex">
        <!-- Logo Area -->
        <div class="h-20 flex items-center gap-3 px-8 border-b border-white/10">
            <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center">
                <img src="{{ asset('images/AdsTech.png') }}" class="w-5 h-5 object-contain" alt="ADS">
            </div>
            <a href="{{ route('admin.dashboard') }}" class="text-xl font-extrabold tracking-tight">
                ADS <span class="text-brand-blue font-light">|</span> Admin
            </a>
        </div>
        
        <!-- Navigasi Menu -->
        <nav class="flex-1 px-4 py-6 space-y-1.5 overflow-y-auto">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3.5 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-brand-blue text-white shadow-md' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span class="font-medium text-sm">Overview Dashboard</span>
            </a>
            
            <div class="pt-6 pb-2">
                <span class="px-4 text-[11px] font-bold text-slate-500 uppercase tracking-wider">Manajemen Konten</span>
            </div>

            <a href="{{ route('admin.services.index') }}" class="flex items-center gap-3.5 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.services.*') ? 'bg-brand-blue text-white shadow-md' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span class="font-medium text-sm">Layanan (Services)</span>
            </a>
            <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-3.5 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.projects.*') ? 'bg-brand-blue text-white shadow-md' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span class="font-medium text-sm">Portfolio (Projects)</span>
            </a>
            <a href="{{ route('admin.faqs.index') }}" class="flex items-center gap-3.5 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.faqs.*') ? 'bg-brand-blue text-white shadow-md' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-medium text-sm">Kelola FAQ</span>
            </a>
        </nav>
        
        <!-- Tombol Logout -->
        <div class="p-4 border-t border-white/10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2.5 px-4 py-3 text-slate-400 hover:bg-red-500/10 hover:text-red-400 rounded-xl transition-colors font-medium text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Logout System
                </button>
            </form>
        </div>
    </aside>

    <!-- Area Konten Utama -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden bg-[#F8FAFC]">
        
        <!-- Topbar Admin -->
        <header class="h-20 bg-white/80 backdrop-blur-md shadow-sm flex items-center justify-between px-8 z-10 border-b border-slate-200">
            <div>
                @yield('header')
            </div>
            
            <div class="flex items-center gap-6">
                <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold text-brand-blue hover:text-brand-blue-hover transition-colors">
                    <span>Lihat Website</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
                <div class="h-6 w-px bg-slate-200"></div>
                <div class="flex items-center gap-3">
                    <div class="flex flex-col text-right">
                        <span class="text-sm font-bold text-brand-navy leading-none">{{ Auth::user()->name }}</span>
                        <span class="text-xs font-medium text-slate-500 mt-1">Administrator</span>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-brand-pale text-brand-blue border border-brand-blue/20 flex items-center justify-center font-extrabold text-sm shadow-sm">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                </div>
            </div>
        </header>

        <!-- Dynamic Content Slot -->
        <main class="flex-1 overflow-y-auto p-6 sm:p-10">
            <div class="max-w-7xl mx-auto">
                @yield('content')
            </div>
        </main>
        
    </div>
</body>
</html>