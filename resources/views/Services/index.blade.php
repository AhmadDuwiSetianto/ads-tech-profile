@extends('layouts.frontend')
@section('title', 'Layanan | ADS | Tech')
@section('content')
<section class="py-32 bg-slate-50 min-h-screen">
  <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">All Services</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight mt-4">Solusi Layanan Web Profesional</h1>
      <p class="text-slate-600 mt-3 text-sm sm:text-base">Berikut adalah daftar lengkap layanan pengembangan website yang kami tawarkan untuk mendukung kesuksesan bisnis Anda.</p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($services as $service)
        <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
          <div class="w-14 h-14 rounded-2xl bg-brand-pale text-brand-blue flex items-center justify-center mb-6">
            {!! $service->icon ?? '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"></path></svg>' !!}
          </div>
          <h3 class="text-xl font-bold text-brand-navy mb-3">{{ $service->title }}</h3>
          <p class="text-sm text-slate-500 leading-relaxed flex-1">{{ $service->description }}</p>
        </div>
      @empty
        <div class="col-span-full text-center text-slate-500 bg-white p-12 rounded-2xl border border-slate-100 shadow-sm">
            Belum ada data layanan yang tersedia saat ini.
        </div>
      @endforelse
    </div>
  </div>
</section>
@endsection