@extends('layouts.admin')

@section('header')
    <h2 class="font-extrabold text-2xl text-brand-navy tracking-tight leading-tight">
        Kelola FAQ
    </h2>
@endsection

@section('content')
    <!-- Alert Success -->
    @if(session('success'))
        <div class="flex items-center gap-3 bg-emerald-50 border border-emerald-200 text-emerald-700 px-5 py-4 rounded-xl mb-6 shadow-sm">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
            <span class="font-semibold text-sm">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Toolbar Atas Tabel -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <p class="text-sm text-slate-500 font-medium">
            Daftar Pertanyaan yang Sering Diajukan (FAQ) pada halaman utama website.
        </p>
        <a href="{{ route('admin.faqs.create') }}" class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white font-bold py-2.5 px-6 rounded-full text-sm transition-all shadow-md shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
            + Tambah FAQ
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="py-4 px-6 text-xs font-bold text-slate-500 uppercase tracking-wider w-1/3">Pertanyaan</th>
                        <th class="py-4 px-6 text-xs font-bold text-slate-500 uppercase tracking-wider">Jawaban</th>
                        <th class="py-4 px-6 text-xs font-bold text-slate-500 uppercase tracking-wider text-center w-40">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($faqs as $faq)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        
                        <!-- Kolom Pertanyaan -->
                        <td class="py-4 px-6 align-top">
                            <div class="font-bold text-brand-navy text-sm leading-snug">
                                {{ $faq->question }}
                            </div>
                        </td>
                        
                        <!-- Kolom Jawaban -->
                        <td class="py-4 px-6 align-top">
                            <p class="text-sm text-slate-600 line-clamp-2 leading-relaxed">
                                {{ $faq->answer }}
                            </p>
                        </td>
                        
                        <!-- Kolom Aksi -->
                        <td class="py-4 px-6 align-top text-center">
                            <div class="flex justify-center items-center gap-3.5">
                                <!-- Tombol Edit -->
                                <a href="{{ route('admin.faqs.edit', $faq) }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-blue hover:text-brand-navy transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    Edit
                                </a>
                                
                                <span class="text-slate-200">|</span>
                                
                                <!-- Tombol Hapus -->
                                <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus FAQ ini?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center gap-1.5 text-sm font-semibold text-red-500 hover:text-red-700 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    
                    @empty
                    <!-- State Kosong Jika Belum Ada Data -->
                    <tr>
                        <td colspan="3" class="py-16 px-6 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-slate-300 mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <p class="text-slate-500 font-medium text-sm">Belum ada data FAQ.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($faqs->hasPages())
        <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50">
            {{ $faqs->links() }}
        </div>
        @endif
    </div>
@endsection