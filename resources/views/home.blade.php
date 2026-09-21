@extends('layouts.front')
@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            <div class="lg:col-span-6 space-y-8 flex flex-col items-center md:items-start text-center md:text-left" data-aos="fade-right">
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-brand-navy text-xs sm:text-sm font-medium">
                    <span class="text-slate-700">Trusted by 100+ Growing Businesses</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-[54px] font-extrabold text-brand-navy tracking-tight leading-[1.18]">
                    Professional <br class="hidden sm:inline">
                    <span class="text-brand-blue">Website</span> for Your <br class="hidden sm:inline">
                    Growing Business
                </h1>
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl">
                    Kami membantu bisnis memiliki website profesional, modern, responsif, dan dirancang untuk membangun kepercayaan pelanggan serta mendukung pertumbuhan bisnis Anda.
                </p>
                <div>
                    <a class="inline-flex items-center justify-center px-7 py-3 rounded-full text-sm font-semibold bg-brand-blue text-white shadow-md hover:bg-brand-blue-hover" href="{{ route('services.index') }}">Lihat Layanan Kami</a>
                </div>
            </div>
            
            <div class="lg:col-span-6 flex justify-center relative" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('hero-ads.png') }}" alt="Web Development" class="w-full max-w-[500px] h-auto object-contain relative z-10">
            </div>
        </div>
    </div>
</section>
@endsection