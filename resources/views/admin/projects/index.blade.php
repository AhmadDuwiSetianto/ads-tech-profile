@extends('layouts.admin')

@section('header')
    <h2 class="font-extrabold text-2xl text-brand-navy tracking-tight leading-tight">
        Kelola Portfolio (Projects)
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

    <!-- Toolbar Atas Tabel (Posisi Tombol Tambah yang Benar) -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <p class="text-sm text-slate-500 font-medium">
            Daftar karya dan proyek unggulan yang ditampilkan pada halaman utama website.
        </p>
        <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white font-bold py-2.5 px-6 rounded-full text-sm transition-all shadow-md shrink-0">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
            + Tambah Project
        </a>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200">
                        <th class="py-4 px-6 text-xs font-bold text-slate-500 uppercase tracking-wider w-24">Preview</th>
                        <th class="py-4 px-6 text-xs font-bold text-slate-500 uppercase tracking-wider w-1/3">Judul & Kategori</th>
                        <th class="py-4 px-6 text-xs font-bold text-slate-500 uppercase tracking-wider">Tautan Web</th>
                        <th class="py-4 px-6 text-xs font-bold text-slate-500 uppercase tracking-wider text-center w-40">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($projects as $project)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        
                        <!-- Kolom Gambar -->
                        <td class="py-4 px-6 align-middle">
                            @if($project->image)
                                <div class="w-16 h-12 rounded-lg overflow-hidden border border-slate-200 shadow-sm relative group">
                                    <img src="{{ asset('storage/'.$project->image) }}" class="w-full h-full object-cover transition-transform group-hover:scale-110" alt="{{ $project->title }}">
                                </div>
                            @else
                                <div class="w-16 h-12 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-[10px] font-bold text-slate-400 uppercase">
                                    Kosong
                                </div>
                            @endif
                        </td>

                        <!-- Kolom Judul & Kategori -->
                        <td class="py-4 px-6 align-middle">
                            <div class="font-bold text-brand-navy text-sm mb-1">{{ $project->title }}</div>
                            <span class="inline-block px-2 py-0.5 bg-brand-pale text-brand-blue rounded text-[10px] font-bold uppercase tracking-wider border border-blue-100">
                                {{ $project->category }}
                            </span>
                        </td>
                        
                        <!-- Kolom Link -->
                        <td class="py-4 px-6 align-middle">
                            @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-500 hover:text-brand-blue transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    Kunjungi Web
                                </a>
                            @else
                                <span class="text-sm font-medium text-slate-400">-</span>
                            @endif
                        </td>
                        
                        <!-- Kolom Aksi (Clean Icons) -->
                        <td class="py-4 px-6 align-middle text-center">
                            <div class="flex justify-center items-center gap-3.5">
                                <!-- Tombol Edit dengan Ikon -->
                                <a href="{{ route('admin.projects.edit', $project) }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-blue hover:text-brand-navy transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    Edit
                                </a>
                                
                                <span class="text-slate-200">|</span>
                                
                                <!-- Tombol Hapus dengan Ikon -->
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus portfolio ini?');" class="inline">
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
                        <td colspan="4" class="py-16 px-6 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-slate-300 mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <p class="text-slate-500 font-medium text-sm">Belum ada project portfolio.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($projects->hasPages())
        <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50">
            {{ $projects->links() }}
        </div>
        @endif
    </div>
@endsection