<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola FAQ</h2>
            <a href="{{ route('admin.faqs.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm transition">+ Tambah FAQ</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">{{ session('success') }}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="w-full whitespace-no-wrap border-collapse border border-slate-200">
                    <thead>
                        <tr class="text-left font-bold bg-slate-50 border-b border-slate-200">
                            <th class="px-6 py-3">Pertanyaan</th>
                            <th class="px-6 py-3">Jawaban</th>
                            <th class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($faqs as $faq)
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="px-6 py-4 font-medium">{{ $faq->question }}</td>
                            <td class="px-6 py-4 text-sm text-slate-500">{{ Str::limit($faq->answer, 50) }}</td>
                            <td class="px-6 py-4 flex justify-center space-x-3 items-center">
                                <a href="{{ route('admin.faqs.edit', $faq) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                                <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" onsubmit="return confirm('Hapus FAQ ini?');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline font-medium">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="3" class="px-6 py-4 text-center text-slate-500">Belum ada FAQ.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>