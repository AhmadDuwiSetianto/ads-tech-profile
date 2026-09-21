@extends('layouts.frontend')
@section('title', 'Beranda')

@section('content')
<!-- 1. Hero Section -->
<!-- Perbaikan pt-28 dan pb-12 agar tidak terlalu jauh jarak atas dan bawahnya di mobile -->
<section class="relative pt-28 pb-12 lg:pt-40 lg:pb-32 overflow-hidden bg-white">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <!-- Perbaikan gap-6 untuk mobile agar gambar naik mendekati tombol/teks -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
            <!-- Kolom Teks Hero -->
            <div class="lg:col-span-6 space-y-5 lg:space-y-6 text-center lg:text-left" data-aos="fade-right">
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200 text-brand-navy text-[11px] sm:text-xs font-medium mx-auto lg:mx-0 max-w-full">
                    <span class="w-2 h-2 rounded-full bg-brand-blue shrink-0"></span>
                    <span class="truncate">Kembangkan bisnis Anda bersama kami</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-[52px] font-extrabold text-brand-navy tracking-tight leading-[1.15]">
                    Website <br class="hidden sm:inline">
                    <span class="text-brand-blue">Profesional</span> untuk <br class="hidden sm:inline">
                    Bisnis Anda
                </h1>
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Kami membantu bisnis memiliki website profesional, modern, responsif, dan dirancang untuk membangun kepercayaan pelanggan serta mendukung pertumbuhan bisnis Anda.
                </p>
                <div class="pt-2">
                    <a class="inline-flex items-center justify-center px-7 py-3 rounded-full text-sm font-semibold bg-brand-blue text-white shadow-md hover:bg-brand-blue-hover transition-all" href="{{ route('services') }}">Lihat Layanan Kami</a>
                </div>
            </div>
            
            <!-- Kolom Gambar Hero -->
            <div class="lg:col-span-6 flex justify-center relative" data-aos="fade-left" data-aos-delay="200">
                <!-- Penambahan -mt-2 pada mobile untuk sedikit lebih menarik gambar ke atas -->
                <img src="{{ asset('images/hero-ads.png') }}" alt="Web Development" class="w-full max-w-[360px] sm:max-w-[400px] lg:max-w-[500px] h-auto object-contain relative z-10 -mt-2 lg:mt-0">
            </div>
        </div>
    </div>
</section>

<!-- 2. Services Section -->
<section class="py-20 lg:py-24 bg-slate-50 border-y border-slate-100" id="services">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <div class="inline-flex items-center justify-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-sky-500 text-xs font-bold uppercase tracking-wider mb-4 border border-blue-100">
                Layanan
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight mt-2 lg:mt-4">Solusi Layanan Web Profesional</h2>
            <p class="text-slate-600 mt-3 text-sm sm:text-base">Berikut adalah daftar lengkap layanan pengembangan website yang kami tawarkan untuk mendukung kesuksesan bisnis Anda.</p>
        </div>
        
        <div class="flex flex-wrap justify-center gap-6">
            @forelse($services as $service)
                <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col items-start text-left w-full sm:w-[280px] lg:w-[300px]" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="w-14 h-14 rounded-2xl bg-brand-pale text-brand-blue flex items-center justify-center mb-5 shrink-0">
                        {!! $service->icon ?? '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"></path></svg>' !!}
                    </div>
                    <h3 class="text-lg font-bold text-brand-navy mb-2">{{ $service->title }}</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">{{ $service->description }}</p>
                </div>
            @empty
                <div class="text-center text-slate-500 bg-white p-8 rounded-2xl border border-slate-100 shadow-sm w-full max-w-md">
                    Belum ada data layanan. Silakan tambahkan melalui Panel Admin.
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- 3. About / Why Us Section -->
<section id="why-us">
    <div class="w-full bg-slate-50/50 border-y border-slate-100 py-16 lg:py-20 px-6 sm:px-10 lg:px-12 shadow-sm relative overflow-hidden">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <div class="lg:col-span-6 flex justify-center order-2 lg:order-1" data-aos="fade-right">
                <img src="{{ asset('images/ads web.png') }}" alt="ADS | Tech Web Development" class="w-full max-w-md lg:max-w-lg h-auto object-contain">
            </div>
            <div class="lg:col-span-6 space-y-5 lg:space-y-6 flex flex-col items-start text-left order-1 lg:order-2" data-aos="fade-left">
                <span class="px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">Tentang Bisnis Kami</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-brand-navy leading-snug">Mitra Terpercaya Pengembangan Perangkat Lunak & Solusi Digital</h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Kami berfokus pada pengembangan perangkat lunak dan layanan konsultasi IT untuk menghadirkan solusi teknologi terbaik, tepat waktu, serta sesuai anggaran demi mendukung pertumbuhan bisnis Anda.
                </p>
                <div class="space-y-3 pt-2 w-full flex flex-col items-start text-left">
                    <div class="flex items-start gap-3 w-full">
                        <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">✓</div>
                        <span class="text-sm sm:text-base font-medium text-slate-700">Pemanfaatan Inovasi Teknologi Terkini yang Handal</span>
                    </div>
                    <div class="flex items-start gap-3 w-full">
                        <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">✓</div>
                        <span class="text-sm sm:text-base font-medium text-slate-700">Fokus Penuh pada Kebutuhan dan Hasil Bisnis Klien</span>
                    </div>
                    <div class="flex items-start gap-3 w-full">
                        <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">✓</div>
                        <span class="text-sm sm:text-base font-medium text-slate-700">Dukungan Pemeliharaan & Komunikasi yang Efektif</span>
                    </div>
                </div>
                <div class="pt-2">
                    <a class="inline-flex items-center gap-2 text-sm font-semibold text-brand-blue hover:underline" href="{{ route('about') }}">
                        <span>Pelajari Lebih Lanjut Tentang Kami</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Portfolio Section & 5. Core Expertise -->
<div id="portfolio">
    <!-- Portfolio Section -->
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
                <div class="inline-flex items-center justify-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-sky-500 text-xs font-bold uppercase tracking-wider mb-4 border border-blue-100">
                    Portofolio
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Portofolio Unggulan</h2>
                <p class="text-slate-600 mt-3 text-sm sm:text-base">Beberapa hasil karya pilihan pengembangan website dan sistem digital terbaik yang telah kami selesaikan untuk para klien.</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6">
                @forelse($projects as $project)
                    <div class="group bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col text-left w-full sm:w-[300px] lg:w-[320px]" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="h-48 sm:h-52 bg-slate-100 relative overflow-hidden p-4">
                            <div class="w-full h-full bg-white rounded-t-xl border border-slate-200 shadow-sm flex group-hover:scale-105 transition-transform duration-300 overflow-hidden">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover" alt="{{ $project->title }}">
                                @else
                                    <div class="flex items-center justify-center w-full h-full bg-slate-50 text-slate-400 text-sm">Tidak Ada Gambar</div>
                                @endif
                            </div>
                            <span class="absolute top-3 right-3 text-[10px] font-semibold bg-brand-navy text-white px-2 py-0.5 rounded-full">{{ $project->category }}</span>
                        </div>
                        
                        <div class="p-5 flex flex-col items-start flex-1 w-full">
                            <span class="text-xs font-semibold text-brand-blue uppercase tracking-wider">{{ $project->category }}</span>
                            <h3 class="text-base font-bold text-brand-navy mt-1 line-clamp-1">{{ $project->title }}</h3>
                            <p class="text-xs text-slate-500 mt-1 line-clamp-2">{{ $project->description }}</p>
                            @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-brand-blue w-full transition">
                                <span>Lihat Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="text-center text-slate-500 bg-slate-50 p-8 rounded-2xl border border-slate-100 shadow-sm w-full max-w-md">
                        Belum ada data portofolio. Silakan tambahkan melalui Panel Admin.
                    </div>
                @endforelse
            </div>

            <!-- Tombol Lihat Semua Project di Bawah -->
            <div class="text-center mt-10 lg:mt-12" data-aos="fade-up">
                <a href="{{ route('portfolio') }}" class="inline-flex items-center justify-center px-8 py-3 rounded-full text-sm font-semibold bg-brand-navy text-white shadow-md hover:bg-slate-800 transition-all gap-2">
                    <span>Lihat Semua Proyek</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Core Expertise Section -->
    <section class="py-20 bg-slate-50 border-t border-slate-100">
        <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-sky-500 text-xs font-bold uppercase tracking-wider mb-3 border border-blue-100">
                    Keahlian Utama
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Bidang Keahlian Kami</h2>
                <p class="text-slate-600 mt-3 text-sm sm:text-base">Fokus keahlian utama kami dalam membangun solusi digital berkualitas tinggi untuk berbagai skala bisnis.</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6">
                <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm relative flex flex-col items-start text-left w-full sm:w-[300px] lg:w-[320px]" data-aos="zoom-in" data-aos-delay="0">
                    <div class="w-12 h-12 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-lg mb-4 shrink-0">💻</div>
                    <h3 class="text-lg font-bold text-brand-navy mb-2">Pengembangan Web Full-Stack</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">Membangun sistem web, landing page, dan dashboard interaktif yang cepat, aman, serta responsif di semua perangkat.</p>
                </div>
                <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm relative flex flex-col items-start text-left w-full sm:w-[300px] lg:w-[320px]" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-12 h-12 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-lg mb-4 shrink-0">🛒</div>
                    <h3 class="text-lg font-bold text-brand-navy mb-2">Sistem Pelacakan Pesanan</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">Pengembangan sistem manajemen pesanan dan pelacakan transaksi custom yang terintegrasi dengan payment gateway.</p>
                </div>
                <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm relative flex flex-col items-start text-left w-full sm:w-[300px] lg:w-[320px]" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-12 h-12 rounded-xl bg-brand-pale text-brand-blue flex items-center justify-center font-bold text-lg mb-4 shrink-0">🛠️</div>
                    <h3 class="text-lg font-bold text-brand-navy mb-2">Konsultasi & Maintenance</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">Layanan konsultasi arsitektur sistem, optimalisasi performa, serta dukungan pemeliharaan perangkat lunak berkala.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- 6. FAQ Section -->
<section class="py-20 lg:py-24 bg-white border-t border-slate-100" id="faq">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-sky-500 text-xs font-bold uppercase tracking-wider mb-4 border border-blue-100">
                FAQ
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Pertanyaan yang Sering Diajukan</h2>
        </div>

        <div class="max-w-4xl mx-auto space-y-4" data-aos="fade-up" data-aos-delay="200">
            @forelse($faqs as $faq)
                <details class="group bg-white rounded-2xl border border-slate-200 shadow-sm transition-all duration-300 overflow-hidden" {{ $loop->first ? 'open' : '' }}>
                    <summary class="flex items-center justify-between p-5 sm:p-6 cursor-pointer select-none list-none text-brand-navy font-bold text-[15px] sm:text-lg hover:text-brand-blue transition-colors gap-4">
                        <span class="flex-1 text-left leading-snug">{{ $faq->question }}</span>
                        <span class="shrink-0 flex h-8 w-8 items-center justify-center rounded-full bg-brand-pale text-brand-blue transition-transform duration-300 group-open:rotate-180">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </span>
                    </summary>
                    <div class="px-5 sm:px-6 pb-5 sm:pb-6 text-sm sm:text-base text-slate-600 leading-relaxed border-t border-slate-100 pt-4 text-left">
                        {!! nl2br(e($faq->answer)) !!}
                    </div>
                </details>
            @empty
                <div class="text-center text-slate-500 bg-slate-50 p-6 rounded-2xl border border-slate-100">Belum ada FAQ. Silakan tambahkan melalui Panel Admin.</div>
            @endforelse
        </div>
    </div>
</section>
@endsection