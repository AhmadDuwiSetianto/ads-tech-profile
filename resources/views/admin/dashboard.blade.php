<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-brand-navy leading-tight">
            {{ __('Overview Dashboard') }}
        </h2>
    </x-slot>

    <!-- Kartu Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-5 hover:shadow-md transition">
            <div class="w-14 h-14 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500">Total Layanan</p>
                <h3 class="text-3xl font-extrabold text-slate-800">{{ $serviceCount }}</h3>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-5 hover:shadow-md transition">
            <div class="w-14 h-14 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500">Total Portfolio</p>
                <h3 class="text-3xl font-extrabold text-slate-800">{{ $projectCount }}</h3>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center gap-5 hover:shadow-md transition">
            <div class="w-14 h-14 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500">Total FAQ</p>
                <h3 class="text-3xl font-extrabold text-slate-800">{{ $faqCount }}</h3>
            </div>
        </div>

    </div>

    <!-- Papan Informasi Utama -->
    <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
        <h3 class="text-xl font-bold text-brand-navy mb-3">Selamat Datang di Portal Admin ADS | Tech!</h3>
        <p class="text-slate-600 leading-relaxed max-w-3xl">
            Sistem ini dirancang khusus untuk mempermudah Anda dalam mengelola konten website perusahaan. Gunakan menu navigasi di sebelah kiri untuk menambah, mengubah, atau menghapus Layanan (Services), Portfolio (Projects), serta Pertanyaan Umum (FAQ). Semua perubahan akan tersinkronisasi secara <i>real-time</i> ke halaman utama pengunjung.
        </p>
    </div>
</x-admin-layout>