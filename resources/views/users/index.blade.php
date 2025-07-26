@extends('layout.master')

@section('page')
    User Data
@endsection

@section('title')
    List Data User
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css"/>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @endif
    </script>
@endpush

@section('content')
    <div class="mb-4">
        <a href="{{ route('users.create') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700">
            <i class="fas fa-plus mr-2"></i> Tambah User
        </a>
    </div>

    <div class="overflow-x-auto">
        <table id="userTable" class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">#</th>
{{--                <th class="px-6 py-3">ID</th>--}}
{{--                <th class="px-6 py-3">Foto</th>--}}
                <th class="px-6 py-3">Nama</th>
                <th class="px-6 py-3">Email</th>
                <th class="px-6 py-3">Password</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($users as $key => $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $key + 1 }}</td>
{{--                    <td class="px-6 py-4">{{ $users->id_finger }}</td>--}}
{{--                    <td class="px-6 py-4 text-center">--}}
{{--                        <img src="{{ asset('/storage/employees/'.$employee->foto) }}" class="w-20 rounded">--}}
{{--                    </td>--}}
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">{{ $user->password }}</td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <a href="{{ route('users.show', $user->id) }}" class="px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600">Detail</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded hover:bg-yellow-200">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda yakin?');" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700" value="Hapus">
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="15" class="px-6 py-4 text-center">Data user belum ada.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
