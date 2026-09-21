<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'ADS | Tech - Professional Website for Your Growing Business')</title>
  
  <!-- Favicon / Logo di Samping Title -->
  <link rel="icon" type="image/png" href="{{ asset('images/AdsTech.png') }}">
  
  <!-- Fonts & AOS Animation -->
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
</head>
<body class="bg-white text-slate-800 font-sans antialiased selection:bg-brand-blue selection:text-white overflow-x-hidden">
  
  <!-- BEGIN: Navbar -->
  <header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 bg-transparent border-b border-transparent">
    <!-- Top Bar -->
    <div id="topbar" class="bg-brand-blue py-2 px-4 sm:px-6 lg:px-12 text-[11px] sm:text-xs text-white shadow-sm">
      <div class="max-w-6xl mx-auto flex flex-row items-center justify-between">
        <div class="flex items-center gap-3 sm:gap-6 truncate">
          <a href="mailto:adstechnology07@gmail.com" class="flex items-center gap-1.5 hover:text-blue-100 transition-colors truncate">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <span class="font-medium truncate">adstechnology07@gmail.com</span>
          </a>
          <a href="https://wa.me/6282313458156?text=Halo%20ADS%20Tech,%20saya%20tertarik%20untuk%20membuat%20website." target="_blank" class="flex items-center gap-1.5 hover:text-blue-100 transition-colors truncate">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white/80 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <span class="font-medium truncate">+62 823-1345-8156</span>
          </a>
        </div>
        <div class="flex items-center gap-4 shrink-0">
          @auth
          <span class="hidden sm:block h-3 w-px bg-white/20"></span>
          <a href="{{ route('admin.dashboard') }}" class="text-[11px] font-bold text-white hover:text-blue-200 transition-colors">Admin Panel &rarr;</a>
          @endauth
        </div>
      </div>
    </div>
    
    <!-- Main Menu Navbar -->
    <div class="max-w-6xl mx-auto px-4 sm:px-8 lg:px-12 h-20 flex items-center justify-between relative">
      <a class="flex items-center gap-2 group shrink-0" href="{{ route('home') }}">
        <div class="w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center transition-transform group-hover:scale-105">
          <img src="{{ asset('images/AdsTech.png') }}" alt="ADS Logo" class="w-full h-full object-contain">
        </div>
        <div class="flex items-baseline font-bold text-lg sm:text-xl tracking-tight text-brand-navy">
          ADS <span class="mx-1 text-brand-blue font-normal">|</span> Tech
        </div>
      </a>
      
      <!-- Desktop Nav Menu -->
      <nav class="hidden md:flex items-center gap-1 bg-slate-100 p-1.5 rounded-full text-sm font-medium">
        <a id="nav-home" class="px-5 py-2 rounded-full transition-all {{ request()->routeIs('home') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }}" href="{{ route('home') }}">Home</a>
        <a id="nav-services" class="px-5 py-2 rounded-full transition-all {{ request()->routeIs('services') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }}" href="{{ route('services') }}">Services</a>
        <a id="nav-about" class="px-5 py-2 rounded-full transition-all {{ request()->routeIs('about') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }}" href="{{ route('about') }}">About</a>
        <a id="nav-portfolio" class="px-5 py-2 rounded-full transition-all {{ request()->routeIs('portfolio') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }}" href="{{ route('portfolio') }}">Portfolio</a>
        <a id="nav-faq" class="px-5 py-2 rounded-full transition-all {{ request()->routeIs('faq') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:text-brand-navy' }}" href="{{ route('faq') }}">FAQ</a>
      </nav>
      
      <div class="hidden md:block shrink-0">
        <a class="inline-flex items-center justify-center px-6 py-2.5 rounded-full text-sm font-medium bg-brand-blue hover:bg-brand-blue-hover text-white shadow-sm transition-all" href="https://wa.me/6282313458156?text=Halo%20ADS%20Tech,%20saya%20ingin%20memulai%20proyek%20website." target="_blank">
          Get Started
        </a>
      </div>

      <!-- Mobile Hamburger Button -->
      <div class="flex md:hidden relative z-[60]">
        <button id="mobile-menu-button" type="button" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 text-brand-navy flex flex-col items-center justify-center gap-[4px] transition-colors focus:outline-none" aria-label="Menu">
          <span class="block h-[2px] w-5 bg-brand-navy rounded-full transition-all duration-300" id="hamburger-line-1"></span>
          <span class="block h-[2px] w-4 bg-brand-blue rounded-full transition-all duration-300 mr-auto ml-2.5" id="hamburger-line-2"></span>
          <span class="block h-[2px] w-5 bg-brand-navy rounded-full transition-all duration-300" id="hamburger-line-3"></span>
        </button>
      </div>

      <!-- Mobile Dropdown Menu (Floating Card Style) -->
      <div id="mobile-menu" class="md:hidden absolute top-[85px] left-4 right-4 bg-white rounded-2xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.12)] transition-all duration-300 ease-out transform opacity-0 invisible -translate-y-4 z-50">
        <div class="flex flex-col p-3 space-y-1 font-medium text-sm">
          <a class="flex items-center justify-between px-4 py-3 rounded-xl transition-all {{ request()->routeIs('home') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:bg-slate-50 hover:text-brand-navy' }}" href="{{ route('home') }}">
            <span>Home</span>
          </a>
          <a class="flex items-center justify-between px-4 py-3 rounded-xl transition-all {{ request()->routeIs('services') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:bg-slate-50 hover:text-brand-navy' }}" href="{{ route('services') }}">
            <span>Services</span>
          </a>
          <a class="flex items-center justify-between px-4 py-3 rounded-xl transition-all {{ request()->routeIs('about') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:bg-slate-50 hover:text-brand-navy' }}" href="{{ route('about') }}">
            <span>About</span>
          </a>
          <a class="flex items-center justify-between px-4 py-3 rounded-xl transition-all {{ request()->routeIs('portfolio') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:bg-slate-50 hover:text-brand-navy' }}" href="{{ route('portfolio') }}">
            <span>Portfolio</span>
          </a>
          <a class="flex items-center justify-between px-4 py-3 rounded-xl transition-all {{ request()->routeIs('faq') ? 'bg-brand-blue text-white shadow-sm' : 'text-slate-600 hover:bg-slate-50 hover:text-brand-navy' }}" href="{{ route('faq') }}">
            <span>FAQ</span>
          </a>
          
          <div class="pt-2 mt-1 border-t border-slate-100">
            <a class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl text-sm font-semibold bg-emerald-600 hover:bg-emerald-700 text-white shadow-sm transition-all" href="https://wa.me/6282313458156?text=Halo%20ADS%20Tech,%20saya%20ingin%20memulai%20proyek%20website." target="_blank">
              <span>Mulai Proyek</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
          </div>
        </div>
      </div>

    </div>
  </header>
  <!-- END: Navbar -->
  
  <!-- Dynamic Content Area -->
  <main>
    @yield('content')
  </main>
  
  <!-- BEGIN: Footer -->
  <footer class="bg-slate-50 text-slate-600 text-sm border-t border-slate-200/60 shadow-inner" id="contact">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12 py-16">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">
        <!-- Kolom Info Perusahaan -->
        <div class="lg:col-span-5 space-y-4 flex flex-col items-start text-left">
          <div class="flex items-center gap-2.5">
            <div class="w-9 h-9 bg-brand-pale rounded-md p-1 border border-blue-100">
              <img src="{{ asset('images/AdsTech.png') }}" class="w-full h-full object-contain" alt="ADS Tech Logo">
            </div>
            <div class="text-xl font-bold text-brand-navy tracking-tight">ADS <span class="text-brand-blue">|</span> Tech</div>
          </div>
          <p class="text-xs sm:text-sm text-slate-500 max-w-sm leading-relaxed">
            Mitra pengembang website dan solusi digital terpercaya untuk mengoptimalkan potensi serta pertumbuhan bisnis Anda di era modern.
          </p>
          <!-- Tombol WhatsApp di Footer -->
          <div class="pt-2">
            <a href="https://wa.me/6282313458156?text=Halo%20ADS%20Tech,%20saya%20ingin%20berkonsultasi%20mengenai%20pembuatan%20website." target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-semibold bg-emerald-600 hover:bg-emerald-700 text-white shadow-sm transition-all">
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
              <span>Hubungi WhatsApp Kami</span>
            </a>
          </div>
        </div>

        <!-- Kolom Navigasi Cepat -->
        <div class="lg:col-span-3 space-y-4 text-left">
          <h4 class="font-bold text-brand-navy text-base">Tautan Cepat</h4>
          <ul class="space-y-2.5 text-xs sm:text-sm">
            <li><a href="{{ route('home') }}" class="hover:text-brand-blue transition-colors">Beranda Utama</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-brand-blue transition-colors">Layanan Kami</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-brand-blue transition-colors">Tentang Perusahaan</a></li>
            <li><a href="{{ route('portfolio') }}" class="hover:text-brand-blue transition-colors">Portofolio Klien</a></li>
            <li><a href="{{ route('faq') }}" class="hover:text-brand-blue transition-colors">FAQ & Bantuan</a></li>
          </ul>
        </div>

        <!-- Kolom Layanan & Kontak -->
        <div class="lg:col-span-4 space-y-4 text-left">
          <h4 class="font-bold text-brand-navy text-base">Layanan Utama</h4>
          <ul class="space-y-2.5 text-xs sm:text-sm text-slate-500">
            <li>Pengembangan Web Full-Stack</li>
            <li>Sistem Pelacakan Pesanan Kustom</li>
            <li>Konsultasi Arsitektur IT & Maintenance</li>
          </ul>
          <div class="pt-2 text-xs text-slate-500">
            <p class="font-semibold text-brand-navy">Email Resmi:</p>
            <p>adstechnology07@gmail.com</p>
          </div>
        </div>
      </div>

      <!-- Copyright Bar -->
      <div class="mt-12 pt-8 border-t border-slate-200/60 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
        <p>© 2026 ADS | Tech. Hak Cipta Dilindungi Undang-Undang.</p>
        <p>Solusi Digital Profesional untuk Bisnis Anda.</p>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: false,
      offset: 50,
      mirror: true
    });

    // Skrip untuk efek background blur di Navbar saat di-scroll
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

    // Skrip Tombol Mobile Menu (Animasi Elegan & Auto-Close)
    document.addEventListener("DOMContentLoaded", function () {
      const menuButton = document.getElementById("mobile-menu-button");
      const mobileMenu = document.getElementById("mobile-menu");
      const line1 = document.getElementById("hamburger-line-1");
      const line2 = document.getElementById("hamburger-line-2");
      const line3 = document.getElementById("hamburger-line-3");
      let isMenuOpen = false;

      function closeMenu() {
        if (!isMenuOpen) return;
        // Tutup menu
        mobileMenu.classList.remove("opacity-100", "visible", "translate-y-0");
        mobileMenu.classList.add("opacity-0", "invisible", "-translate-y-4");
        // Kembalikan ikon hamburger
        line1.style.transform = "rotate(0) translateY(0)";
        line2.style.opacity = "1";
        line3.style.transform = "rotate(0) translateY(0)";
        isMenuOpen = false;
      }

      function openMenu() {
        // Buka menu
        mobileMenu.classList.remove("opacity-0", "invisible", "-translate-y-4");
        mobileMenu.classList.add("opacity-100", "visible", "translate-y-0");
        // Animasi silang ikon hamburger
        line1.style.transform = "rotate(45deg) translate(4px, 4px)";
        line2.style.opacity = "0";
        line3.style.transform = "rotate(-45deg) translate(4px, -4px)";
        isMenuOpen = true;
      }

      if (menuButton && mobileMenu) {
        menuButton.addEventListener("click", function (e) {
          e.stopPropagation();
          isMenuOpen ? closeMenu() : openMenu();
        });
      }

      // Auto-close ketika halaman di scroll
      window.addEventListener("scroll", function () {
        if (isMenuOpen && window.scrollY > 10) {
          closeMenu();
        }
      });

      // Auto-close saat klik sembarangan di luar menu
      document.addEventListener("click", function(event) {
        if (isMenuOpen && !mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
          closeMenu();
        }
      });
    });

    // Skrip khusus halaman Home (Mapping navigasi akurat)
    @if(request()->routeIs('home'))
    document.addEventListener("DOMContentLoaded", function () {
      const sectionIds = ["services", "why-us", "portfolio", "faq"];
      const navLinks = {
        "": document.getElementById("nav-home"),
        "services": document.getElementById("nav-services"),
        "why-us": document.getElementById("nav-about"),
        "portfolio": document.getElementById("nav-portfolio"),
        "faq": document.getElementById("nav-faq")
      };

      function updateActiveNav() {
        let scrollPosition = window.scrollY + 350;
        let currentSection = "";

        if (window.scrollY < 200) {
          currentSection = "";
        } else {
          sectionIds.forEach((id) => {
            const section = document.getElementById(id);
            if (section) {
              const sectionTop = section.offsetTop;
              const sectionHeight = section.offsetHeight;
              if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                currentSection = id;
              }
            }
          });
        }

        Object.values(navLinks).forEach((link) => {
          if (link) {
            link.classList.remove("bg-brand-blue", "text-white", "shadow-sm");
            link.classList.add("text-slate-600", "hover:text-brand-navy");
          }
        });

        let activeLink = navLinks[currentSection] || navLinks[""];
        if (activeLink) {
          activeLink.classList.remove("text-slate-600", "hover:text-brand-navy");
          activeLink.classList.add("bg-brand-blue", "text-white", "shadow-sm");
        }
      }

      window.addEventListener("scroll", updateActiveNav);
      updateActiveNav();
    });
    @endif
  </script>
</body>
</html>