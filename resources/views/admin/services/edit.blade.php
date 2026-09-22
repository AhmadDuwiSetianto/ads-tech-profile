@extends('layouts.admin')

@section('header')
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.services.index') }}" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue hover:bg-brand-pale transition-all" title="Kembali">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="font-extrabold text-2xl text-brand-navy tracking-tight leading-tight">
            Edit Layanan
        </h2>
    </div>
@endsection

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8 sm:p-10">
            <form action="{{ route('admin.services.update', $service) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-6">
                    <label for="title" class="block text-sm font-bold text-brand-navy mb-2">Judul Layanan</label>
                    <input type="text" name="title" id="title" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3.5 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" value="{{ old('title', $service->title) }}" required>
                    @error('title') <span class="text-red-500 text-xs font-medium mt-2 block">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-sm font-bold text-brand-navy mb-2">Deskripsi Layanan</label>
                    <textarea name="description" id="description" rows="5" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3.5 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none resize-y" required>{{ old('description', $service->description) }}</textarea>
                    @error('description') <span class="text-red-500 text-xs font-medium mt-2 block">{{ $message }}</span> @enderror
                </div>

                <div class="mb-8 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <div class="flex items-start gap-6">
                        <!-- Preview Icon Lama (Jika ada) -->
                        <div class="shrink-0 flex flex-col items-center">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Preview</span>
                            <div class="w-12 h-12 rounded-xl bg-white border border-slate-200 text-brand-blue flex items-center justify-center shadow-sm">
                                {!! old('icon', $service->icon) ?? '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>' !!}
                            </div>
                        </div>
                        
                        <div class="flex-1">
                            <label for="icon" class="block text-sm font-bold text-brand-navy mb-2 flex items-center gap-2">
                                Kode SVG Icon baru <span class="px-2 py-0.5 rounded bg-slate-200 text-slate-500 text-[10px] uppercase">Opsional</span>
                            </label>
                            <textarea name="icon" id="icon" rows="3" class="w-full rounded-xl border-slate-200 bg-white px-4 py-3 text-sm font-mono text-slate-500 focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" placeholder="Ganti kode <svg> jika ingin mengubah icon">{{ old('icon', $service->icon) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3 pt-6 border-t border-slate-100">
                    <a href="{{ route('admin.services.index') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-full text-sm font-bold bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-brand-navy transition-colors">Batal</a>
                    <button type="submit" class="inline-flex items-center justify-center px-8 py-3 rounded-full text-sm font-bold bg-brand-blue text-white shadow-md hover:bg-brand-blue-hover focus:ring-4 focus:ring-brand-blue/20 transition-all">Update Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection