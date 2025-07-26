@extends('layout.master')

@section('page')
    Category Data
@endsection

@section('title')
    List Data Categories
@endsection

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
        <a href="{{ route('categories.create') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700">
            <i class="fas fa-plus mr-2"></i> Tambah Category
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">Request Date</th>
                <th class="px-6 py-3">Program</th>
                <th class="px-6 py-3">Role</th>
                <th class="px-6 py-3">Category 1</th>
                <th class="px-6 py-3">Category 2</th>
                <th class="px-6 py-3">Category 3</th>
                <th class="px-6 py-3">Category 4</th>
                <th class="px-6 py-3">SLA</th>
                <th class="px-6 py-3">Request By</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $category->request_date }}</td>
                    <td class="px-6 py-4">{{ $category->program }}</td>
                    <td class="px-6 py-4">{{ $category->role }}</td>
                    <td class="px-6 py-4">{{ $category->category1 }}</td>
                    <td class="px-6 py-4">{{ $category->category2 }}</td>
                    <td class="px-6 py-4">{{ $category->category3 }}</td>
                    <td class="px-6 py-4">{{ $category->category4 }}</td>
                    <td class="px-6 py-4">{{ $category->sla }}</td>
                    <td class="px-6 py-4">{{ $category->request_by }}</td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <a href="{{ route('categories.show', $category->id) }}" class="px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600">Detail</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded hover:bg-yellow-200">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda yakin?');" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700" value="Hapus">
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="px-6 py-4 text-center">Data categories belum ada.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
