@extends('layout.master')

@section('page', 'Halaman Macro')
@section('title', 'Tambah Macro')

    @section('content')
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Form Tambah Macro</h3>

            <form action="{{ route('macros.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Layanan</label>
                    <select name="layanan" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('layanan') border-red-500 @enderror">
                        <option value="">-- Pilih Layanan --</option>
                        <option value="1" {{ old('layanan') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('layanan') == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('layanan') == '3' ? 'selected' : '' }}>3</option>
                    </select>
                    @error('layanan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">User</label>
                    <select name="user" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('users') border-red-500 @enderror">
                        <option value="">-- Pilih User --</option>
                        <option value="1" {{ old('users') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('users') == '2' ? 'selected' : '' }}>2</option>
                    </select>
                    @error('users') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Category 1</label>
                    <select name="category1" class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('category1') border-red-500 @enderror">
                        <option value="">-- Pilih Category 1 --</option>
                        <option value="regulasi" {{ old('category1') == 'regulasi' ? 'selected' : '' }}>Regulasi</option>
                        <option value="platform" {{ old('category1') == 'platform' ? 'selected' : '' }}>Platform</option>
                    </select>
                    @error('category1') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Category 2</label>
                        <input type="text" name="category2" value="{{ old('category2') }}"
                               class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('category2') border-red-500 @enderror">
                        @error('category2') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Category 3</label>
                        <input type="text" name="category3" value="{{ old('category3') }}"
                               class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('category3') border-red-500 @enderror">
                        @error('category3') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-4 mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Issue</label>
                    <input type="text" name="issue" value="{{ old('issue') }}"
                           class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('issue') border-red-500 @enderror"
                           placeholder="Masukkan Issue">
                    @error('issue') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Sample Inquiry</label>
                    <input type="text" name="sample_inquiry" value="{{ old('sample_inquiry') }}"
                           class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('sample_inquiry') border-red-500 @enderror"
                           placeholder="Masukkan Sample Inquiry">
                    @error('sample_inquiry') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Action</label>
                    <input type="text" name="action" value="{{ old('action') }}"
                           class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('action') border-red-500 @enderror"
                           placeholder="Masukkan Action">
                    @error('action') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Macro Name</label>
                    <input type="text" name="macro_name" value="{{ old('macro_name') }}"
                           class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('macro_name') border-red-500 @enderror"
                           placeholder="Masukkan Macro Name">
                    @error('macro_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Macro</label>
                    <input type="text" name="macro" value="{{ old('macro') }}"
                           class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('macro') border-red-500 @enderror"
                           placeholder="Masukkan Macro">
                    @error('macro') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-1 font-medium text-gray-700 dark:text-gray-300">Template</label>
                    <textarea name="template" rows="4"
                              class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('template') border-red-500 @enderror"
                              placeholder="Masukkan Template">{{ old('template') }}</textarea>
                    @error('template') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex space-x-3">
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded hover:bg-green-700">
                        SIMPAN
                    </button>
                    <button type="reset"
                            class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded hover:bg-yellow-600">
                        RESET
                    </button>
                </div>
            </form>
        </div>
    @endsection
