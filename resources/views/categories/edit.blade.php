@extends('layout.master')

@section('page', 'Halaman Categories')
@section('title', 'Edit Category')

    @section('content')
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Request Date</label>
                    <input type="date" name="request_date" value="{{ old('request_date', $category->request_date) }}"
                           class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('request_date') border-red-500 @enderror">
                    @error('request_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Layanan</label>
                        <select name="layanan"
                                class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('layanan') border-red-500 @enderror">
                            <option value="">-- Pilih Layanan --</option>
                            <option value="1" {{ old('layanan', $category->layanan) == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('layanan', $category->layanan) == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('layanan', $category->layanan) == '3' ? 'selected' : '' }}>3</option>
                        </select>
                        @error('layanan')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Role</label>
                        <select name="role"
                                class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('role') border-red-500 @enderror">
                            <option value="">-- Pilih Role --</option>
                            <option value="1" {{ old('role', $category->role) == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('role', $category->role) == '2' ? 'selected' : '' }}>2</option>
                        </select>
                        @error('role')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Category 1</label>
                        <select name="category1"
                                class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('category1') border-red-500 @enderror">
                            <option value="">-- Pilih Category 1 --</option>
                            <option value="regulasi" {{ old('category1', $category->category1) == 'regulasi' ? 'selected' : '' }}>Regulasi</option>
                            <option value="platform" {{ old('category1', $category->category1) == 'platform' ? 'selected' : '' }}>Platform</option>
                        </select>
                        @error('category1')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Category 2</label>
                        <input type="text" name="category2" value="{{ old('category2', $category->category2) }}"
                               class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('category2') border-red-500 @enderror">
                        @error('category2')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Category 3</label>
                        <input type="text" name="category3" value="{{ old('category3', $category->category3) }}"
                               class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('category3') border-red-500 @enderror">
                        @error('category3')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Category 4</label>
                        <input type="text" name="category4" value="{{ old('category4', $category->category4) }}"
                               class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('category4') border-red-500 @enderror">
                        @error('category4')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">SLA (hari)</label>
                        <input type="number" name="sla" value="{{ old('sla', $category->sla) }}"
                               class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('sla') border-red-500 @enderror">
                        @error('sla')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Request By</label>
                        <input type="text" name="request_by" value="{{ old('request_by', $category->request_by) }}"
                               class="w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white rounded-lg shadow-sm @error('request_by') border-red-500 @enderror">
                        @error('request_by')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">UPDATE</button>
                    <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 ml-2">BATAL</a>
                </div>
            </form>
        </div>
    @endsection
