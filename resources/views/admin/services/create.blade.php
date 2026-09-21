<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            Tambah Service Baru
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            <form action="{{ route('admin.services.store') }}" method="POST">
                @csrf
                
                <div class="mb-5">
                    <label for="title" class="block text-sm font-semibold text-slate-700 mb-2">Judul Service</label>
                    <input type="text" name="title" id="title" class="block w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-4 py-2.5" value="{{ old('title') }}" placeholder="Contoh: Pembuatan Website Custom" required>
                    @error('title') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div class="mb-5">
                    <label for="description" class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Layanan</label>
                    <textarea name="description" id="description" rows="4" class="block w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-4 py-2.5" placeholder="Tuliskan penjelasan singkat mengenai layanan ini..." required>{{ old('description') }}</textarea>
                    @error('description') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label for="icon" class="block text-sm font-semibold text-slate-700 mb-2">Kode SVG Icon (Opsional)</label>
                    <textarea name="icon" id="icon" rows="3" class="block w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm font-mono text-slate-500 px-4 py-2.5 bg-slate-50" placeholder="<svg>...</svg>">{{ old('icon') }}</textarea>
                    <p class="text-xs text-slate-400 mt-1.5">Anda bisa menyalin kode SVG dari Heroicons atau biarkan kosong untuk menggunakan ikon bawaan.</p>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('admin.services.index') }}" class="bg-white border border-slate-300 text-slate-700 px-5 py-2.5 rounded-lg hover:bg-slate-50 transition text-sm font-medium">Batal</a>
                    <button type="submit" class="bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 transition text-sm font-medium shadow-sm">Simpan Service</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>