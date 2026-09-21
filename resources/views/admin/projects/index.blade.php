<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Portfolio (Projects)</h2>
            <a href="{{ route('admin.projects.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm transition">+ Tambah Project</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">{{ session('success') }}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full whitespace-no-wrap border-collapse border border-slate-200">
                        <thead>
                            <tr class="text-left font-bold bg-slate-50 border-b border-slate-200">
                                <th class="px-6 py-3">Gambar</th>
                                <th class="px-6 py-3">Judul & Kategori</th>
                                <th class="px-6 py-3">Link</th>
                                <th class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                            <tr class="border-b border-slate-200 hover:bg-slate-50">
                                <td class="px-6 py-4">
                                    @if($project->image)
                                        <img src="{{ asset('storage/'.$project->image) }}" class="w-16 h-12 object-cover rounded-md border border-slate-200" alt="img">
                                    @else
                                        <span class="text-xs text-slate-400">No Image</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-800">{{ $project->title }}</div>
                                    <div class="text-xs text-blue-600 font-semibold">{{ $project->category }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    @if($project->link)
                                        <a href="{{ $project->link }}" target="_blank" class="text-blue-500 hover:underline">Kunjungi</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-6 py-4 flex justify-center space-x-3 items-center mt-2">
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Hapus project ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline font-medium">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="4" class="px-6 py-4 text-center text-slate-500">Belum ada project portfolio.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">{{ $projects->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>