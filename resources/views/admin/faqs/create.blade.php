@extends('layouts.admin')

@section('header')
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.faqs.index') }}" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-brand-blue hover:border-brand-blue hover:bg-brand-pale transition-all" title="Kembali">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="font-extrabold text-2xl text-brand-navy tracking-tight leading-tight">
            Tambah FAQ Baru
        </h2>
    </div>
@endsection

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8 sm:p-10">
            <form action="{{ route('admin.faqs.store') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Pertanyaan</label>
                    <input type="text" name="question" value="{{ old('question') }}" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none" placeholder="Tuliskan pertanyaan yang sering ditanyakan..." required autofocus>
                    @error('question') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-8">
                    <label class="block text-sm font-bold text-brand-navy mb-2">Jawaban</label>
                    <textarea name="answer" rows="5" class="w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:bg-white focus:border-brand-blue focus:ring-4 focus:ring-brand-blue/10 transition-all outline-none resize-y" placeholder="Berikan jawaban yang jelas dan padat..." required>{{ old('answer') }}</textarea>
                    @error('answer') <span class="text-red-500 text-xs font-medium mt-1.5 block">{{ $message }}</span> @enderror
                </div>
                
                <div class="flex justify-end gap-3 pt-6 border-t border-slate-100">
                    <a href="{{ route('admin.faqs.index') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-full text-sm font-bold bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 transition-colors">Batal</a>
                    <button type="submit" class="inline-flex items-center justify-center px-8 py-3 rounded-full text-sm font-bold bg-brand-blue text-white shadow-md hover:bg-brand-blue-hover focus:ring-4 focus:ring-brand-blue/20 transition-all">Simpan FAQ</button>
                </div>
            </form>
        </div>
    </div>
@endsection