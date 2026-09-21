@extends('layouts.frontend')

@section('content')
<section class="py-32 bg-slate-50/50 min-h-screen">
  <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12">
    <div class="text-center mb-16">
      <span class="px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">FAQ</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight mt-4">Pertanyaan yang Sering Diajukan</h1>
      <p class="text-slate-600 mt-3 text-sm sm:text-base">Temukan jawaban atas hal-hal yang sering ditanyakan seputar layanan dan kerja sama kami.</p>
    </div>

    <div class="space-y-4">
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
        <div class="text-center text-slate-500 bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
            Belum ada data FAQ yang tersedia saat ini.
        </div>
      @endforelse
    </div>
  </div>
</section>
@endsection