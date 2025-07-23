@extends('layout.master')

@section('page', 'Halaman Macro')

@section('title', 'List Macros')

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
            <a href="{{ route('macros.create') }}"
               class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700">
                <i class="fas fa-plus mr-2"></i> Tambah Macro
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Layanan</th>
                    <th class="px-6 py-3">User</th>
                    <th class="px-6 py-3">Category 1</th>
                    <th class="px-6 py-3">Category 2</th>
                    <th class="px-6 py-3">Category 3</th>
                    <th class="px-6 py-3">Issue</th>
                    <th class="px-6 py-3">Sample Inquiry</th>
                    <th class="px-6 py-3">Action</th>
                    <th class="px-6 py-3">Macro Name</th>
                    <th class="px-6 py-3">Macro</th>
                    <th class="px-6 py-3">Template</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($macros as $key => $macro)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $key + 1 }}</td>
                        <td class="px-6 py-4">{{ $macro->layanan }}</td>
                        <td class="px-6 py-4">{{ $macro->user }}</td>
                        <td class="px-6 py-4">{{ $macro->category1 }}</td>
                        <td class="px-6 py-4">{{ $macro->category2 }}</td>
                        <td class="px-6 py-4">{{ $macro->category3 }}</td>
                        <td class="px-6 py-4">{{ $macro->issue }}</td>
                        <td class="px-6 py-4">{{ $macro->sample_inquiry }}</td>
                        <td class="px-6 py-4">{{ $macro->action }}</td>
                        <td class="px-6 py-4">{{ $macro->macro_name }}</td>
                        <td class="px-6 py-4">{{ $macro->macro }}</td>
                        <td class="px-6 py-4">{{ Str::limit($macro->template, 50) }}</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="{{ route('macros.show', $macro->id) }}"
                                   class="px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600">
                                    Detail
                                </a>
                                <a href="{{ route('macros.edit', $macro->id) }}"
                                   class="px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded hover:bg-yellow-200">
                                    Edit
                                </a>
                                <form onsubmit="return confirm('Apakah Anda yakin?');"
                                      action="{{ route('macros.destroy', $macro->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="13" class="px-6 py-4 text-center">Data macro belum ada.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    @endsection
