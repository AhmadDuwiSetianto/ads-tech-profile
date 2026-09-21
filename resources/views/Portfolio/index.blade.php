@extends('layouts.frontend')
@section('title', 'Portofolio | ADS | Tech')
@section('content')
<section class="py-32 bg-white min-h-screen">
  <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="px-3.5 py-1 rounded-full bg-blue-50 text-brand-blue text-xs font-bold uppercase tracking-wider border border-blue-100">Our Portfolio</span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight mt-4">Jejak Proyek & Karya Terbaik</h1>
      <p class="text-slate-600 mt-3 text-sm sm:text-base">Kumpulan project website dan sistem berbasis web yang telah kami selesaikan dengan standar kualitas tinggi.</p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($projects as $project)
        <div class="group bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
          <div class="h-56 bg-slate-100 relative overflow-hidden p-4">
            <div class="w-full h-full bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden flex items-center justify-center">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $project->title }}">
                @else
                    <span class="text-slate-400 text-sm">No Image</span>
                @endif
            </div>
            <span class="absolute top-6 right-6 text-[10px] font-semibold bg-brand-navy text-white px-2.5 py-1 rounded-full">{{ $project->category }}</span>
          </div>
          
          <div class="p-6 text-left flex flex-col flex-1 justify-between">
            <div>
              <span class="text-xs font-semibold text-brand-blue uppercase tracking-wider">{{ $project->category }}</span>
              <h3 class="text-lg font-bold text-brand-navy mt-1">{{ $project->title }}</h3>
              <p class="text-xs text-slate-500 mt-2 leading-relaxed">{{ $project->description }}</p>
            </div>
            @if($project->link)
            <a href="{{ $project->link }}" target="_blank" class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-semibold text-brand-blue hover:underline">
              <span>View Live Project</span>
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </a>
            @endif
          </div>
        </div>
      @empty
        <div class="col-span-full text-center text-slate-500 bg-slate-50 p-12 rounded-2xl border border-slate-100 shadow-sm">
            Belum ada data portfolio yang ditampilkan.
        </div>
      @endforelse
    </div>
  </div>
</section>
@endsection