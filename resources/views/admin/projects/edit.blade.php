<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Project</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama Project</label>
                        <input type="text" name="title" value="{{ $project->title }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Kategori</label>
                        <input type="text" name="category" value="{{ $project->category }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500">{{ $project->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Link URL</label>
                        <input type="url" name="link" value="{{ $project->link }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Gambar Baru (Kosongkan jika tidak ingin mengubah)</label>
                        @if($project->image)
                            <div class="mb-2 mt-2">
                                <img src="{{ asset('storage/'.$project->image) }}" class="h-24 rounded border">
                            </div>
                        @endif
                        <input type="file" name="image" class="mt-1 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700" accept="image/*">
                    </div>
                    <div class="flex justify-end gap-3">
                        <a href="{{ route('admin.projects.index') }}" class="bg-gray-200 px-4 py-2 rounded-md hover:bg-gray-300">Batal</a>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Update Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>