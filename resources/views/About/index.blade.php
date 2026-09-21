@extends('layouts.frontend')

@section('content')
<section class="py-32 bg-slate-50/50 min-h-screen flex items-center">
  <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-6 flex justify-center">
        <img src="{{ asset('images/ads web.png') }}" alt="About ADS Tech" class="w-full max-w-lg h-auto object-contain">
      </div>
      <div class="lg:col-span-6 space-y-6 text-left">
        <span class="px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">About Us</span>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-navy leading-tight">Mitra Terpercaya Pengembangan Website & Solusi Digital Bisnis</h1>
        <p class="text-slate-600 text-base leading-relaxed">
          ADS | Tech berfokus pada penyediaan layanan pembuatan website profesional, landing page, dan aplikasi berbasis web yang dirancang khusus untuk mendongkrak kredibilitas dan produktivitas bisnis di era digital.
        </p>
        <div class="space-y-4 pt-2">
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center font-bold text-xs">✓</div>
            <span class="text-slate-700 font-medium">Tim Pengembang Profesional Berpengalaman</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center font-bold text-xs">✓</div>
            <span class="text-slate-700 font-medium">Desain Modern, Responsif, dan Cepat</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-6 h-6 rounded-full bg-brand-blue/10 text-brand-blue flex items-center justify-center font-bold text-xs">✓</div>
            <span class="text-slate-700 font-medium">Dukungan Pemeliharaan & Konsultasi Berkelanjutan</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection