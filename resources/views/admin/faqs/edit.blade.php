<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit FAQ</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Pertanyaan</label>
                        <input type="text" name="question" value="{{ $faq->question }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Jawaban</label>
                        <textarea name="answer" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500" required>{{ $faq->answer }}</textarea>
                    </div>
                    <div class="flex justify-end gap-3">
                        <a href="{{ route('admin.faqs.index') }}" class="bg-gray-200 px-4 py-2 rounded-md hover:bg-gray-300">Batal</a>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>