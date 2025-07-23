@extends('layout.master')

@section('page')
    Employee Data
@endsection

@section('title')
    List Data Employee
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
        <a href="{{ route('employees.create') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700">
            <i class="fas fa-plus mr-2"></i> Tambah Employee
        </a>
    </div>

    <div class="overflow-x-auto">
        <table id="employeeTable" class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">ID Finger Print</th>
                <th class="px-6 py-3">Foto</th>
                <th class="px-6 py-3">Nama</th>
                <th class="px-6 py-3">Team Leader</th>
                <th class="px-6 py-3">Supervisor</th>
                <th class="px-6 py-3">Level</th>
                <th class="px-6 py-3">Program</th>
                <th class="px-6 py-3">Email</th>
                <th class="px-6 py-3">Gender</th>
                <th class="px-6 py-3">Age</th>
                <th class="px-6 py-3">Alamat</th>
                <th class="px-6 py-3">TTL</th>
                <th class="px-6 py-3">Join Date</th>
                <th class="px-6 py-3">Tenure</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($employees as $employee)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $employee->id_finger }}</td>
                    <td class="px-6 py-4 text-center">
                        <img src="{{ asset('/storage/employees/'.$employee->foto) }}" class="w-20 rounded">
                    </td>
                    <td class="px-6 py-4">{{ $employee->nama }}</td>
                    <td class="px-6 py-4">{{ $employee->team_leader }}</td>
                    <td class="px-6 py-4">{{ $employee->supervisor }}</td>
                    <td class="px-6 py-4">{{ $employee->level }}</td>
                    <td class="px-6 py-4">{{ $employee->program }}</td>
                    <td class="px-6 py-4">{{ $employee->email }}</td>
                    <td class="px-6 py-4">{{ $employee->gender }}</td>
                    <td class="px-6 py-4">{{ $employee->age }}</td>
                    <td class="px-6 py-4">{{ $employee->alamat }}</td>
                    <td class="px-6 py-4">{{ $employee->ttl }}</td>
                    <td class="px-6 py-4">{{ $employee->join_date }}</td>
                    <td class="px-6 py-4">{{ $employee->tenure }}</td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <a href="{{ route('employees.show', $employee->id) }}" class="px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600">Detail</a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded hover:bg-yellow-200">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda yakin?');" action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700" value="Hapus">
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="15" class="px-6 py-4 text-center">Data employees belum ada.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
