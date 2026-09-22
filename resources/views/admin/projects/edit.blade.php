@extends('layouts.admin')

@section('header')
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.projects.index') }}" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue hover:bg-brand-pale transition-all" title="Kembali">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="font-extrabold text-2xl text-brand-navy tracking-tight leading-tight">
            Edit Project
        </h2>
    </div>
@endsection

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8 sm:p-10">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Nama Project</label>
                    <input type="text" name="title" value="{{ old('title', $project->title) }}" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" required>
                    @error('title') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Kategori</label>
                    <input type="text" name="category" value="{{ old('category', $project->category) }}" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" required>
                    @error('category') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Deskripsi</label>
                    <textarea name="description" rows="4" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none resize-y">{{ old('description', $project->description) }}</textarea>
                    @error('description') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Link URL <span class="px-2 py-0.5 ml-1 rounded bg-slate-200 text-slate-500 text-[10px] uppercase">Opsional</span></label>
                    <input type="url" name="link" value="{{ old('link', $project->link) }}" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none">
                    @error('link') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-8 p-6 rounded-2xl bg-slate-50 border border-slate-100 flex flex-col sm:flex-row gap-6 items-start">
                    <!-- Tampilan Gambar Lama -->
                    <div class="shrink-0">
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Gambar Saat Ini</label>
                        @if($project->image)
                            <div class="w-32 h-24 rounded-lg overflow-hidden border border-slate-200 shadow-sm bg-white">
                                <img src="{{ asset('storage/'.$project->image) }}" class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="w-32 h-24 rounded-lg border border-slate-200 bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-400">No Image</div>
                        @endif
                    </div>
                    
                    <div class="flex-1 w-full">
                        <label class="block text-sm font-bold text-brand-navy mb-2">Unggah Gambar Baru <span class="px-2 py-0.5 ml-1 rounded bg-slate-200 text-slate-500 text-[10px] uppercase">Opsional</span></label>
                        <input type="file" name="image" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-brand-pale file:text-brand-blue hover:file:bg-blue-100 transition-all cursor-pointer border border-slate-200 rounded-xl bg-white p-1.5" accept="image/*">
                        <p class="text-xs text-slate-400 mt-2 font-medium">Kosongkan jika tidak ingin mengubah gambar. Format: JPG, PNG, WEBP.</p>
                        @error('image') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                <div class="flex justify-end gap-3 pt-6 border-t border-slate-100">
                    <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-full text-sm font-bold bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 transition-colors">Batal</a>
                    <button type="submit" class="inline-flex items-center justify-center px-8 py-3 rounded-full text-sm font-bold bg-brand-blue text-white shadow-md hover:bg-brand-blue-hover focus:ring-4 focus:ring-brand-blue/20 transition-all">Update Project</button>
                </div>
            </form>
        </div>
    </div>
@endsection