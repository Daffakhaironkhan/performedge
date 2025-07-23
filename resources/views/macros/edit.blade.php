@extends('layout.master')

@section('page', 'Halaman Macro')
@section('title', 'Edit Macro')

@section('content')
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Form Edit Macro</h3>

        <form action="{{ route('macros.update', $macro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Layanan</label>
                <select name="layanan" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('layanan') border-red-500 @enderror">
                    <option value="">-- Pilih Layanan --</option>
                    <option value="1" {{ old('layanan', $macro->layanan) == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('layanan', $macro->layanan) == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('layanan', $macro->layanan) == '3' ? 'selected' : '' }}>3</option>
                </select>
                @error('layanan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">User</label>
                <select name="user" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('user') border-red-500 @enderror">
                    <option value="">-- Pilih User --</option>
                    <option value="1" {{ old('user', $macro->user) == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('user', $macro->user) == '2' ? 'selected' : '' }}>2</option>
                </select>
                @error('user') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Category 1</label>
                <select name="category1" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('category1') border-red-500 @enderror">
                    <option value="">-- Pilih Category 1 --</option>
                    <option value="regulasi" {{ old('category1', $macro->category1) == 'regulasi' ? 'selected' : '' }}>Regulasi</option>
                    <option value="platform" {{ old('category1', $macro->category1) == 'platform' ? 'selected' : '' }}>Platform</option>
                </select>
                @error('category1') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Category 2</label>
                    <input type="text" name="category2" value="{{ old('category2', $macro->category2) }}"
                           class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('category2') border-red-500 @enderror">
                    @error('category2') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Category 3</label>
                    <input type="text" name="category3" value="{{ old('category3', $macro->category3) }}"
                           class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('category3') border-red-500 @enderror">
                    @error('category3') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="mb-4 mt-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Issue</label>
                <input type="text" name="issue" value="{{ old('issue', $macro->issue) }}"
                       class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('issue') border-red-500 @enderror">
                @error('issue') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Sample Inquiry</label>
                <input type="text" name="sample_inquiry" value="{{ old('sample_inquiry', $macro->sample_inquiry) }}"
                       class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('sample_inquiry') border-red-500 @enderror">
                @error('sample_inquiry') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Action</label>
                <input type="text" name="action" value="{{ old('action', $macro->action) }}"
                       class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('action') border-red-500 @enderror">
                @error('action') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Macro Name</label>
                <input type="text" name="macro_name" value="{{ old('macro_name', $macro->macro_name) }}"
                       class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('macro_name') border-red-500 @enderror">
                @error('macro_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Macro</label>
                <input type="text" name="macro" value="{{ old('macro', $macro->macro) }}"
                       class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('macro') border-red-500 @enderror">
                @error('macro') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Template</label>
                <textarea name="template" rows="4"
                          class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('template') border-red-500 @enderror"
                          placeholder="Masukkan Template">{{ old('template', $macro->template) }}</textarea>
                @error('template') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex space-x-3">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700">
                    UPDATE
                </button>
                <a href="{{ route('macros.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded hover:bg-gray-600">
                    KEMBALI
                </a>
            </div>
        </form>
    </div>
@endsection
