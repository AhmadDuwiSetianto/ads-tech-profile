@extends('layouts.admin')

@section('header')
    <h2 class="font-extrabold text-2xl text-brand-navy tracking-tight leading-tight">
        Overview Dashboard
    </h2>
@endsection

@section('content')
    <!-- Papan Informasi Utama (Banner Premium) -->
    <div class="bg-gradient-to-br from-brand-navy to-brand-blue rounded-3xl p-8 sm:p-10 shadow-lg shadow-brand-blue/20 border border-brand-blue/20 mb-10 relative overflow-hidden">
        <!-- Efek Dekorasi Lingkaran Abstrak -->
        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-32 mb-10 w-32 h-32 bg-brand-blue opacity-50 rounded-full blur-2xl"></div>
        
        <div class="relative z-10">
            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 tracking-tight">Selamat Datang, {{ Auth::user()->name }}! 👋</h3>
            <p class="text-blue-100/90 leading-relaxed max-w-3xl text-sm sm:text-base font-medium">
                Sistem portal admin ini dirancang khusus untuk mempermudah Anda mengelola konten website perusahaan. Gunakan menu navigasi di sebelah kiri untuk mengelola <strong class="text-white">Layanan</strong>, <strong class="text-white">Portfolio</strong>, dan <strong class="text-white">FAQ</strong>. Semua pembaruan akan langsung tersinkronisasi ke halaman publik secara otomatis.
            </p>
        </div>
    </div>

    <!-- Judul Seksi -->
    <div class="mb-5">
        <h3 class="text-lg font-bold text-brand-navy tracking-tight">Ringkasan Data Saat Ini</h3>
    </div>

    <!-- Kartu Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Card 1: Layanan -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100 flex items-center justify-between hover:shadow-xl hover:shadow-brand-blue/5 hover:-translate-y-1 transition-all duration-300 group">
            <div class="flex items-center gap-5">
                <div class="w-14 h-14 rounded-2xl bg-brand-pale text-brand-blue flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-slate-500 mb-1">Total Layanan</p>
                    <h3 class="text-3xl font-black text-brand-navy leading-none">{{ $serviceCount }}</h3>
                </div>
            </div>
        </div>

        <!-- Card 2: Portfolio -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100 flex items-center justify-between hover:shadow-xl hover:shadow-emerald-500/5 hover:-translate-y-1 transition-all duration-300 group">
            <div class="flex items-center gap-5">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-slate-500 mb-1">Total Portfolio</p>
                    <h3 class="text-3xl font-black text-brand-navy leading-none">{{ $projectCount }}</h3>
                </div>
            </div>
        </div>

        <!-- Card 3: FAQ -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100 flex items-center justify-between hover:shadow-xl hover:shadow-amber-500/5 hover:-translate-y-1 transition-all duration-300 group">
            <div class="flex items-center gap-5">
                <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-slate-500 mb-1">Total FAQ</p>
                    <h3 class="text-3xl font-black text-brand-navy leading-none">{{ $faqCount }}</h3>
                </div>
            </div>
        </div>

    </div>
@endsection