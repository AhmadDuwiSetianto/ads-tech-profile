<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portal - ADS | Tech</title>
    <!-- Pastikan Vite berjalan (npm run dev) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-800 flex h-screen overflow-hidden">
    
    <!-- Sidebar Kiri -->
    <aside class="w-64 bg-slate-900 text-white flex flex-col shadow-xl z-20 hidden md:flex">
        <!-- Logo -->
        <div class="h-20 flex items-center justify-center border-b border-slate-700/50">
            <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold tracking-tight">ADS <span class="text-blue-500">|</span> Admin</a>
        </div>
        
        <!-- Navigasi Menu -->
        <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <span class="font-medium">Dashboard</span>
            </a>
            
            <div class="pt-4 pb-2">
                <span class="px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Manajemen Konten</span>
            </div>

            <a href="{{ route('admin.services.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->routeIs('admin.services.*') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <span class="font-medium">Layanan (Services)</span>
            </a>
            <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->routeIs('admin.projects.*') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <span class="font-medium">Portfolio (Projects)</span>
            </a>
            <a href="{{ route('admin.faqs.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->routeIs('admin.faqs.*') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <span class="font-medium">Kelola FAQ</span>
            </a>
        </nav>
        
        <!-- Tombol Logout -->
        <div class="p-4 border-t border-slate-700/50">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500 hover:text-white rounded-lg transition-colors font-medium">
                    Logout System
                </button>
            </form>
        </div>
    </aside>

    <!-- Area Konten Utama -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <!-- Topbar Admin -->
        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-8 z-10 border-b border-slate-100">
            <div>
                @if (isset($header))
                    {{ $header }}
                @endif
            </div>
            
            <div class="flex items-center gap-5">
                <a href="{{ route('home') }}" target="_blank" class="text-sm font-semibold text-blue-600 hover:underline">Lihat Website &rarr;</a>
                <div class="h-8 w-px bg-slate-200"></div>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-slate-800 text-white flex items-center justify-center font-bold text-sm">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-bold text-slate-800 leading-none">{{ Auth::user()->name }}</span>
                        <span class="text-xs text-slate-500 mt-1">Administrator</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Dynamic Content Slot (WAJIB ADA AGAR TIDAK BLANK) -->
        <main class="flex-1 overflow-y-auto p-8 bg-slate-50/50">
            {{ $slot }}
        </main>
        
    </div>
</body>
</html>