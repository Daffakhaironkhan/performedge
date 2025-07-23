@extends('layout.master')

@section('page')
    Halaman Employees
@endsection

@section('title')
    Tambah Employee
@endsection

@section('content')
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">ID Finger Print</label>
                    <input type="text" name="id_finger" value="{{ old('id_finger') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    @error('id_finger') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">FOTO</label>
                    <input type="file" name="foto" class="mt-1 block w-full text-gray-900 dark:text-white">
                    @error('foto') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">NAMA</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('nama') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">TEAM LEADER</label>
                    <input type="text" name="team_leader" value="{{ old('team_leader') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('team_leader') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">SUPERVISOR</label>
                    <input type="text" name="supervisor" value="{{ old('supervisor') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('supervisor') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">LEVEL</label>
                    <input type="text" name="level" value="{{ old('level') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('level') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">PROGRAM</label>
                    <input type="text" name="program" value="{{ old('program') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('program') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">EMAIL</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('email') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">GENDER</label>
                    <select name="gender" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option value="">-- Pilih Gender --</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">AGE</label>
                    <input type="number" name="age" value="{{ old('age') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('age') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">ALAMAT</label>
                    <textarea name="alamat" rows="3" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('alamat') }}</textarea>
                    @error('alamat') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">TEMPAT TANGGAL LAHIR</label>
                    <input type="date" name="ttl" value="{{ old('ttl') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('ttl') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">JOIN DATE</label>
                    <input type="date" name="join_date" value="{{ old('join_date') }}" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    @error('join_date') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium rounded px-4 py-2 mr-2">SAVE</button>
                <button type="reset" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded px-4 py-2">RESET</button>
            </div>
        </form>
    </div>
@endsection
