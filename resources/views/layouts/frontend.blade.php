<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ADS | Tech - @yield('title', 'Professional Website for Your Growing Business')</title>
    
    <!-- Google Fonts & AOS -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#0B1F33', dark: '#071524', blue: '#2563EB',
                            'blue-hover': '#1D4ED8', pale: '#EFF6FF',
                            'pale-light': '#F8FAFC', slate: '#5A6E82'
                        }
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-slate-800 font-sans antialiased selection:bg-brand-blue selection:text-white overflow-x-hidden">
    
    <header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-sm">
        <!-- Top Bar -->
        <div id="topbar" class="bg-brand-blue py-2.5 px-6 sm:px-8 lg:px-12 text-[11px] sm:text-xs text-white">
            <div class="max-w-6xl mx-auto flex flex-row items-center justify-between">
                <div class="flex items-center gap-4 sm:gap-6">
                    <a href="mailto:adstechnology07@gmail.com" class="flex items-center gap-1.5 hover:text-blue-100 transition-colors">
                        <svg class="w-4 h-4 sm:w-3.5 sm:h-3.5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span class="hidden sm:inline font-medium">adstechnology07@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Main Navbar -->
        <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12 h-20 flex items-center justify-between">
            <a class="flex items-center gap-2.5 group focus:outline-none" href="{{ route('home') }}">
                <div class="flex items-baseline font-bold text-xl tracking-tight text-brand-navy">
                    ADS <span class="mx-1 text-brand-blue font-normal">|</span> Tech
                </div>
            </a>
            
            <!-- Desktop Navigation - Active State via Laravel Request -->
            <nav class="hidden md:flex items-center gap-1 bg-slate-100 p-1.5 rounded-full text-sm font-medium">
                <a class="{{ request()->routeIs('home') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all duration-300" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('services.*') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all duration-300" href="{{ route('services.index') }}">Services</a>
                <a class="{{ request()->routeIs('portfolio.*') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all duration-300" href="{{ route('portfolio.index') }}">Portfolio</a>
                <a class="{{ request()->routeIs('about.*') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all duration-300" href="{{ route('about.index') }}">About</a>
                <a class="{{ request()->routeIs('faq.*') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all duration-300" href="{{ route('faq.index') }}">FAQ</a>
            </nav>
            
            <div class="flex items-center space-x-2 md:space-x-4">
                <a class="hidden md:inline-flex items-center justify-center px-6 py-2.5 rounded-full text-sm font-medium bg-brand-blue hover:bg-brand-blue-hover text-white shadow-sm transition-all" href="#contact">Get Started</a>
            </div>
        </div>
    </header>
    
    <main class="pt-28">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-brand-navy text-slate-400 text-sm border-t border-slate-800" id="contact">
        <!-- Struktur footer Anda tetap sama seperti sebelumnya, letakkan di sini -->
        <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12 py-16">
            <div class="mt-12 pt-8 border-t border-slate-800 flex flex-col justify-between text-xs text-slate-500">
                <p>© {{ date('Y') }} ADS | Tech. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ duration: 800, once: true, offset: 50 });</script>
</body>
</html>