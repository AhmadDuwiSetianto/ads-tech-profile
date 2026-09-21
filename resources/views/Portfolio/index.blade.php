@extends('layouts.front')
@section('title', 'Portfolio Kami')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight">Selected Projects</h2>
            <p class="mt-3 text-base text-slate-600 leading-relaxed">Beberapa contoh website dan digital solutions yang kami rancang.</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($projects as $project)
            <div class="group bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-aos="fade-up">
                <div class="h-52 bg-slate-100 relative overflow-hidden flex items-center justify-center">
                    @if($project->image)
                        <img src="{{ asset('storage/'.$project->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $project->title }}">
                    @else
                        <span class="text-slate-400">No Image</span>
                    @endif
                    <span class="absolute top-3 right-3 text-[10px] font-semibold bg-brand-navy text-white px-2 py-0.5 rounded-full">{{ $project->category ?? 'Web' }}</span>
                </div>
                
                <div class="p-5 text-left flex flex-col items-start">
                    <span class="text-xs font-semibold text-brand-blue uppercase tracking-wider">{{ $project->category }}</span>
                    <h3 class="text-base font-bold text-brand-navy mt-1">{{ $project->title }}</h3>
                    
                    @if($project->link)
                    <a href="{{ $project->link }}" target="_blank" class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-start gap-2 text-xs font-semibold text-slate-600 hover:text-brand-blue cursor-pointer w-full">
                        <span>Kunjungi Web</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </a>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-slate-500 py-10">Belum ada portfolio yang ditambahkan.</div>
            @endforelse
        </div>
    </div>
</section>
@endsection