@extends('layouts.admin')

@section('header')
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.projects.index') }}" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue hover:bg-brand-pale transition-all" title="Kembali">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="font-extrabold text-2xl text-brand-navy tracking-tight leading-tight">
            Tambah Project Baru
        </h2>
    </div>
@endsection

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8 sm:p-10">
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Nama Project</label>
                    <input type="text" name="title" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" value="{{ old('title') }}" placeholder="Contoh: Redesign Aplikasi Keuangan" required>
                    @error('title') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Kategori</label>
                    <input type="text" name="category" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" value="{{ old('category') }}" placeholder="Contoh: Landing Page" required>
                    @error('category') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Deskripsi</label>
                    <textarea name="description" rows="4" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none resize-y" placeholder="Ceritakan detail proyek ini...">{{ old('description') }}</textarea>
                    @error('description') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Link URL <span class="px-2 py-0.5 ml-1 rounded bg-slate-200 text-slate-500 text-[10px] uppercase">Opsional</span></label>
                    <input type="url" name="link" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" value="{{ old('link') }}" placeholder="https://domain.com">
                    @error('link') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-8 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Gambar Mockup</label>
                    <input type="file" name="image" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-brand-pale file:text-brand-blue hover:file:bg-blue-100 transition-all cursor-pointer border border-slate-200 rounded-xl bg-white p-2" accept="image/*">
                    <p class="text-xs text-slate-400 mt-3 font-medium">Format: JPG, PNG, WEBP (Maksimal 2MB).</p>
                    @error('image') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="flex justify-end gap-3 pt-6 border-t border-slate-100">
                    <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-full text-sm font-bold bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 transition-colors">Batal</a>
                    <button type="submit" class="inline-flex items-center justify-center px-8 py-3 rounded-full text-sm font-bold bg-brand-blue text-white shadow-md hover:bg-brand-blue-hover focus:ring-4 focus:ring-brand-blue/20 transition-all">Simpan Project</button>
                </div>
            </form>
        </div>
    </div>
@endsection