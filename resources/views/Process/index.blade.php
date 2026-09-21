@extends('layouts.frontend')

@section('content')
<section class="py-32 bg-white min-h-screen">
  <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">Workflow</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight mt-4">Tahapan Kerja Kami</h1>
      <p class="text-slate-600 mt-3 text-sm sm:text-base">Proses terstruktur yang transparan untuk memastikan setiap proyek website diselesaikan tepat waktu dan sesuai ekspektasi.</p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 relative">
        <span class="text-5xl font-black text-brand-blue/20 absolute top-4 right-6 select-none">01</span>
        <h3 class="text-xl font-bold text-brand-navy mt-4 mb-3">Discovery</h3>
        <p class="text-sm text-slate-600 leading-relaxed">Analisis mendalam mengenai kebutuhan bisnis, referensi desain, dan target audiens proyek Anda.</p>
      </div>
      <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 relative">
        <span class="text-5xl font-black text-brand-blue/20 absolute top-4 right-6 select-none">02</span>
        <h3 class="text-xl font-bold text-brand-navy mt-4 mb-3">UI/UX Design</h3>
        <p class="text-sm text-slate-600 leading-relaxed">Perancangan tata letak visual antarmuka agar intuitif, modern, dan nyaman digunakan pengunjung.</p>
      </div>
      <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 relative">
        <span class="text-5xl font-black text-brand-blue/20 absolute top-4 right-6 select-none">03</span>
        <h3 class="text-xl font-bold text-brand-navy mt-4 mb-3">Development</h3>
        <p class="text-sm text-slate-600 leading-relaxed">Implementasi kode sistem menggunakan Laravel & Tailwind CSS yang bersih, aman, dan responsif.</p>
      </div>
      <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 relative">
        <span class="text-5xl font-black text-brand-blue/20 absolute top-4 right-6 select-none">04</span>
        <h3 class="text-xl font-bold text-brand-navy mt-4 mb-3">Launch & Support</h3>
        <p class="text-sm text-slate-600 leading-relaxed">Pengujian performa akhir, publikasi ke server live, serta pendampingan sistem berkelanjutan.</p>
      </div>
    </div>
  </div>
</section>
@endsection