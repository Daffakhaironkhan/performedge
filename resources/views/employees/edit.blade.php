@extends('layout.master')

@section('page')
    Halaman Edit Employee
@endsection

@section('title')
    Edit Employee
@endsection

@section('content')
    <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-800">
        <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Foto</label>
                <input type="file" name="foto"
                       class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:placeholder-gray-400">
                @error('foto')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
                @if($employee->foto)
                    <img src="{{ asset('storage/employees/'.$employee->foto) }}" class="mt-2 rounded h-24" alt="Foto">
                @endif
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $employee->nama) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                @error('nama')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Team Leader</label>
                    <input type="text" name="team_leader" value="{{ old('team_leader', $employee->team_leader) }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    @error('team_leader')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Supervisor</label>
                    <input type="text" name="supervisor" value="{{ old('supervisor', $employee->supervisor) }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    @error('supervisor')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Level</label>
                    <input type="text" name="level" value="{{ old('level', $employee->level) }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    @error('level')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Program</label>
                    <input type="text" name="program" value="{{ old('program', $employee->program) }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    @error('program')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" value="{{ old('email', $employee->email) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                @error('email')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Gender</label>
                    <select name="gender"
                            class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        <option value="">-- Pilih Gender --</option>
                        <option value="Male" {{ old('gender', $employee->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender', $employee->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Age</label>
                    <input type="number" name="age" value="{{ old('age', $employee->age) }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    @error('age')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                <textarea name="alamat" rows="3"
                          class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">{{ old('alamat', $employee->alamat) }}</textarea>
                @error('alamat')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tempat Tanggal Lahir</label>
                    <input type="date" name="ttl" value="{{ old('ttl', $employee->ttl) }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    @error('ttl')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Join Date</label>
                    <input type="date" name="join_date" value="{{ old('join_date', $employee->join_date) }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    @error('join_date')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Update</button>
                <button type="reset" class="px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600">Reset</button>
            </div>
        </form>
    </div>
@endsection
