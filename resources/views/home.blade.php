@extends('layouts.frontend')
@section('title', 'Beranda')

@section('content')
<!-- 1. Hero Section -->
<section class="relative pt-24 pb-24 lg:pt-32 lg:pb-32 overflow-hidden bg-white">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            <!-- Kolom Teks Hero -->
            <div class="lg:col-span-6 space-y-6 text-center lg:text-left" data-aos="fade-right">
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200 text-brand-navy text-xs font-medium mx-auto lg:mx-0">
                    <span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                    <span>Trusted by 100+ Growing Businesses</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-[52px] font-extrabold text-brand-navy tracking-tight leading-[1.15]">
                    Professional <br class="hidden sm:inline">
                    <span class="text-brand-blue">Website</span> for Your <br class="hidden sm:inline">
                    Growing Business
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
                <img src="{{ asset('images/hero-ads.png') }}" alt="Web Development" class="w-full max-w-[500px] h-auto object-contain relative z-10">
            </div>
        </div>
    </div>
</section>

<!-- 2. Services Section (Ukuran card standar dan posisi center) -->
<section class="py-24 bg-slate-50 border-y border-slate-100" id="services">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center justify-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-sky-500 text-xs font-bold uppercase tracking-wider mb-4 border border-blue-100">
                Services
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Comprehensive Web Solutions</h2>
        </div>
        
        <div class="flex flex-wrap justify-center gap-6">
            @forelse($services as $service)
                <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col items-start text-left w-[300px] sm:w-[280px]" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="w-14 h-14 rounded-2xl bg-brand-pale text-brand-blue flex items-center justify-center mb-5">
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
            <div class="lg:col-span-6 flex justify-center" data-aos="fade-right">
                <img src="{{ asset('images/ads web.png') }}" alt="ADS | Tech Web Development" class="w-full max-w-lg h-auto object-contain">
            </div>
            <div class="lg:col-span-6 space-y-6 flex flex-col items-start text-left" data-aos="fade-left">
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-brand-navy leading-snug">Website yang Dibangun untuk Kebutuhan Bisnis Anda</h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Setiap website dirancang dengan memperhatikan kebutuhan bisnis, pengalaman pengguna, responsivitas, dan kemudahan pengembangan.
                </p>
                <div class="space-y-3.5 pt-2 w-full flex flex-col items-start text-left">
                    <div class="flex items-center justify-start gap-3 w-full">
                        <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                        </div>
                        <span class="text-sm sm:text-base font-medium text-slate-700">Experienced Web Developers &amp; Designers</span>
                    </div>
                    <div class="flex items-center justify-start gap-3 w-full">
                        <div class="w-5 h-5 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                        </div>
                        <span class="text-sm sm:text-base font-medium text-slate-700">Fully Responsive across All Devices</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Portfolio Section (Ukuran card standar dan posisi center) -->
<section class="py-24 bg-white" id="portfolio">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Selected Projects</h2>
        </div>
        
        <div class="flex flex-wrap justify-center gap-6">
            @forelse($projects as $project)
                <div class="group bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col text-left w-[320px] sm:w-[300px]" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="h-52 bg-slate-100 relative overflow-hidden p-4">
                        <div class="w-full h-full bg-white rounded-t-xl border border-slate-200 shadow-sm flex group-hover:scale-105 transition-transform duration-300 overflow-hidden">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover" alt="{{ $project->title }}">
                            @else
                                <div class="flex items-center justify-center w-full h-full bg-slate-50 text-slate-400 text-sm">No Image</div>
                            @endif
                        </div>
                        <span class="absolute top-3 right-3 text-[10px] font-semibold bg-brand-navy text-white px-2 py-0.5 rounded-full">{{ $project->category }}</span>
                    </div>
                    
                    <div class="p-5 flex flex-col items-start flex-1 w-full">
                        <span class="text-xs font-semibold text-brand-blue uppercase tracking-wider">{{ $project->category }}</span>
                        <h3 class="text-base font-bold text-brand-navy mt-1">{{ $project->title }}</h3>
                        <p class="text-xs text-slate-500 mt-1 line-clamp-2">{{ $project->description }}</p>
                        @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-brand-blue w-full transition">
                            <span>View Details</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-center text-slate-500 bg-slate-50 p-8 rounded-2xl border border-slate-100 shadow-sm w-full max-w-md">
                    Belum ada data portfolio. Silakan tambahkan melalui Panel Admin.
                </div>
            @endforelse
        </div>

        <!-- Tombol Lihat Semua Project di Bawah -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center justify-center px-8 py-3 rounded-full text-sm font-semibold bg-brand-navy text-white shadow-md hover:bg-slate-800 transition-all gap-2">
                <span>Lihat Semua Project</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </a>
        </div>
    </div>
</section>

<!-- 5. Process Section -->
<section class="py-20 bg-slate-50 border-t border-slate-100" id="process">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-sky-500 text-xs font-bold uppercase tracking-wider mb-3 border border-blue-100">
                Workflow
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Our Simple Process</h2>
        </div>
        
        <div class="flex flex-wrap justify-center gap-6">
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative flex flex-col items-start text-left w-[260px]" data-aos="zoom-in">
                <span class="text-4xl font-black text-brand-blue select-none">01</span>
                <h3 class="text-lg font-bold text-brand-navy mt-2 mb-2">Discovery</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Memahami tujuan bisnis, target audiens, dan spesifikasi fitur yang diperlukan.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative flex flex-col items-start text-left w-[260px]" data-aos="zoom-in" data-aos-delay="100">
                <span class="text-4xl font-black text-brand-blue select-none">02</span>
                <h3 class="text-lg font-bold text-brand-navy mt-2 mb-2">UI/UX Design</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Merancang mockup visual modern dengan penekanan pada kemudahan navigasi.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative flex flex-col items-start text-left w-[260px]" data-aos="zoom-in" data-aos-delay="200">
                <span class="text-4xl font-black text-brand-blue select-none">03</span>
                <h3 class="text-lg font-bold text-brand-navy mt-2 mb-2">Development</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Pengembangan kode yang bersih, responsif, cepat, serta integrasi sistem backend.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm relative flex flex-col items-start text-left w-[260px]" data-aos="zoom-in" data-aos-delay="300">
                <span class="text-4xl font-black text-brand-blue select-none">04</span>
                <h3 class="text-lg font-bold text-brand-navy mt-2 mb-2">Launch</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Pengujian menyeluruh performa dan peluncuran website live siap digunakan.</p>
            </div>
        </div>
    </div>
</section>

<!-- 6. FAQ Section -->
<section class="py-24 bg-white border-t border-slate-100" id="faq">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-blue-50 text-sky-500 text-xs font-bold uppercase tracking-wider mb-4 border border-blue-100">
                FAQ
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Pertanyaan yang Sering Diajukan</h2>
        </div>

        <div class="max-w-4xl mx-auto space-y-4" data-aos="fade-up" data-aos-delay="200">
            @forelse($faqs as $faq)
                <details class="group bg-white rounded-2xl border border-slate-200 shadow-sm transition-all duration-300 overflow-hidden" {{ $loop->first ? 'open' : '' }}>
                    <summary class="flex items-center justify-between p-6 cursor-pointer select-none list-none text-brand-navy font-bold text-base sm:text-lg hover:text-brand-blue transition-colors">
                        <span class="flex-1 text-left">{{ $faq->question }}</span>
                        <span class="shrink-0 ml-4 flex h-8 w-8 items-center justify-center rounded-full bg-brand-pale text-brand-blue transition-transform duration-300 group-open:rotate-180">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-sm sm:text-base text-slate-600 leading-relaxed border-t border-slate-100 pt-4 text-left">
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