@extends('layout.master')

@section('page', 'Flow Handling')
@section('title', 'List Flow Handlings')

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
        <a href="{{ route('flow_handlings.create') }}"
           class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700">
            <i class="fas fa-plus mr-2"></i> Tambah Flow Handling
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">#</th>
                <th class="px-6 py-3">Program</th>
                <th class="px-6 py-3">User</th>
                <th class="px-6 py-3">Category 1</th>
                <th class="px-6 py-3">Category 2</th>
                <th class="px-6 py-3">Category 3</th>
                <th class="px-6 py-3">Issue</th>
                <th class="px-6 py-3">Sample Inquiry</th>
                <th class="px-6 py-3">Flow Handling Name</th>
                <th class="px-6 py-3">Flow Handling Link</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($flowHandlings as $key => $fh)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $key + 1 }}</td>
                    <td class="px-6 py-4">{{ $fh->program }}</td>
                    <td class="px-6 py-4">{{ $fh->user }}</td>
                    <td class="px-6 py-4">{{ $fh->category1 }}</td>
                    <td class="px-6 py-4">{{ $fh->category2 }}</td>
                    <td class="px-6 py-4">{{ $fh->category3 }}</td>
                    <td class="px-6 py-4">{{ $fh->issue }}</td>
                    <td class="px-6 py-4">{{ $fh->sample_inquiry }}</td>
                    <td class="px-6 py-4">{{ $fh->flow_handling_name }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ $fh->link }}" class="text-blue-600 hover:underline" target="_blank">Link</a>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <a href="{{ route('flow_handlings.show', $fh->id) }}"
                               class="px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600">
                                Show
                            </a>
                            <a href="{{ route('flow_handlings.edit', $fh->id) }}"
                               class="px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded hover:bg-yellow-200">
                                Edit
                            </a>
                            <form action="{{ route('flow_handlings.destroy', $fh->id) }}" method="POST"
                                  onsubmit="return confirm('Apakah Anda yakin?');">
                                @csrf @method('DELETE')
                                <button type="submit"
                                        class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="px-6 py-4 text-center">Data belum ada.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
