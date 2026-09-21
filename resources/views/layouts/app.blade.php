<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ADS | Tech - Professional Website for Your Growing Business</title>
  
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: { navy: '#0B1F33', dark: '#071524', blue: '#2563EB', 'blue-hover': '#1D4ED8', pale: '#EFF6FF', 'pale-light': '#F8FAFC', slate: '#5A6E82' }
          },
          fontFamily: { sans: ['Inter', 'sans-serif'] }
        }
      }
    }
  </script>
  <style>
    .circle-backdrop { background: radial-gradient(circle, rgba(37, 99, 235, 0.18) 0%, rgba(239, 246, 255, 0.45) 50%, rgba(255, 255, 255, 0) 70%); }
    .hero-glow { box-shadow: 0 20px 45px -15px rgba(37, 99, 235, 0.25); }
  </style>
</head>
<body class="bg-white text-slate-800 font-sans antialiased selection:bg-brand-blue selection:text-white overflow-x-hidden">
  
  <header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 bg-transparent border-b border-transparent">
    <!-- Top Bar -->
    <div id="topbar" class="bg-brand-blue py-2.5 px-6 sm:px-8 lg:px-12 text-[11px] sm:text-xs text-white shadow-sm">
      <div class="max-w-6xl mx-auto flex flex-row items-center justify-between">
        <div class="flex items-center gap-4 sm:gap-6">
          <a href="mailto:info@adstech.id" class="flex items-center gap-1.5 hover:text-blue-100 transition-colors">
            <svg class="w-4 h-4 sm:w-3.5 sm:h-3.5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <span class="hidden sm:inline font-medium">info@adstech.id</span>
          </a>
          <a href="https://wa.me/" class="flex items-center gap-1.5 hover:text-blue-100 transition-colors">
            <svg class="w-4 h-4 sm:w-3.5 sm:h-3.5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <span class="hidden sm:inline font-medium">+62 812-XXXX-XXXX</span>
          </a>
        </div>
        <div class="flex items-center gap-4">
          @auth
          <span class="hidden sm:block h-3 w-px bg-white/20"></span>
          <a href="{{ route('admin.dashboard') }}" class="text-[11px] font-bold text-white hover:text-blue-200 transition-colors">Admin Panel &rarr;</a>
          @endauth
        </div>
      </div>
    </div>
    
    <!-- Main Navbar -->
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12 h-20 flex items-center justify-between">
      <a class="flex items-center gap-2.5 group" href="#home">
        <div class="w-10 h-10 flex items-center justify-center transition-transform group-hover:scale-105">
          <img src="{{ asset('images/AdsTech.png') }}" alt="ADS Logo" class="w-full h-full object-contain">
        </div>
        <div class="flex items-baseline font-bold text-xl tracking-tight text-brand-navy">
          ADS <span class="mx-1 text-brand-blue font-normal">|</span> Tech
        </div>
      </a>
      
      <nav class="hidden md:flex items-center gap-1 bg-slate-100 p-1.5 rounded-full text-sm font-medium">
        <a class="nav-link {{ request()->routeIs('home') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all" href="{{ route('home') }}">Home</a>
        <a class="nav-link {{ request()->routeIs('services') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all" href="{{ route('services') }}">Services</a>
        <a class="nav-link {{ request()->routeIs('portfolio') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all" href="{{ route('portfolio') }}">Portfolio</a>
        <a class="nav-link {{ request()->routeIs('about') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all" href="{{ route('about') }}">About</a>
        <a class="nav-link {{ request()->routeIs('process') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all" href="{{ route('process') }}">Process</a>
        <a class="nav-link {{ request()->routeIs('faq') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }} px-5 py-2 rounded-full transition-all" href="{{ route('faq') }}">FAQ</a>
      </nav>
      
      <div class="flex items-center space-x-2 md:space-x-4">
        <a class="hidden md:inline-flex items-center justify-center px-6 py-2.5 rounded-full text-sm font-medium bg-brand-blue hover:bg-brand-blue-hover text-white shadow-sm transition-all" href="#contact">
          Get Started
        </a>
      </div>
    </div>
  </header>

  <main id="home">
    @yield('content')
  </main>
  
  <footer class="bg-brand-navy text-slate-400 text-sm border-t border-slate-800" id="contact">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12 py-16">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
        <div class="lg:col-span-2 space-y-4 flex flex-col items-start text-left">
          <div class="flex items-center gap-2.5">
            <div class="w-9 h-9 bg-white rounded-md p-1"><img src="{{ asset('images/AdsTech.png') }}" class="w-full h-full object-contain"></div>
            <div class="text-xl font-bold text-white tracking-tight">ADS | Tech</div>
          </div>
          <p class="text-xs sm:text-sm text-slate-400 max-w-sm leading-relaxed">ADS | Tech adalah mitra pengembangan website terpercaya untuk membantu pertumbuhan bisnis Anda.</p>
        </div>
      </div>
      <div class="mt-12 pt-8 border-t border-slate-800 flex justify-between text-xs text-slate-500">
        <p>© 2026 ADS | Tech. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: false, offset: 50 });
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 20) {
        navbar.classList.add('bg-white/95', 'backdrop-blur-md', 'border-slate-100');
        navbar.classList.remove('bg-transparent', 'border-transparent');
      } else {
        navbar.classList.add('bg-transparent', 'border-transparent');
        navbar.classList.remove('bg-white/95', 'backdrop-blur-md', 'border-slate-100');
      }
    });

    document.addEventListener("DOMContentLoaded", function () {
      const navLinks = document.querySelectorAll('.nav-link');
      const sections = document.querySelectorAll('main > section[id], main[id], footer[id]');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            navLinks.forEach(item => { item.classList.remove('bg-brand-blue', 'text-white', 'shadow-sm'); item.classList.add('text-slate-600'); });
            const activeLink = document.querySelector(`.nav-link[href="#${entry.target.id}"]`);
            if(activeLink) { activeLink.classList.add('bg-brand-blue', 'text-white', 'shadow-sm'); activeLink.classList.remove('text-slate-600'); }
          }
        });
      }, { rootMargin: '-40% 0px -60% 0px' });
      sections.forEach(section => observer.observe(section));
    });
  </script>
</body>
</html>