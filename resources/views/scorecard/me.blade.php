@extends('layout.master')

@section('page', 'Score Card')
@section('title', 'My Score Card')

    @section('content')
        <div class="bg-cyan-700 text-white px-6 py-4 flex justify-between items-center dark:bg-cyan-800">
            <h1 class="text-2xl font-bold">Scorecard Employee Kemendikdasmen</h1>
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/94/Lambang_Kemendikbud.png" alt="Logo" class="h-12">
        </div>

        <div class="p-6 space-y-6">
            <!-- Info Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Avatar -->
                <div class="flex justify-center items-center">
                    <img src="{{ $photo ?? 'https://via.placeholder.com/150' }}" alt="Employee Photo"
                         class="rounded-full w-36 h-36 object-cover border-4 border-cyan-500">
                </div>

                <!-- Info -->
                <div class="col-span-2 grid grid-cols-2 gap-4">
                    <div><strong>Nama:</strong> {{ $name ?? '-' }}</div>
                    <div><strong>Superior:</strong> {{ $superior ?? '-' }}</div>
                    <div><strong>Program:</strong> {{ $program ?? '-' }}</div>
                    <div><strong>Level:</strong> {{ $level ?? '-' }}</div>
                </div>
            </div>

            <!-- Bobot Header -->
            <div class="text-right font-semibold">
                Bobot:
                <span class="inline-block px-2">20%</span>
                <span class="inline-block px-2">20%</span>
                <span class="inline-block px-2">15%</span>
                <span class="inline-block px-2">40%</span>
                <span class="inline-block px-2">5%</span>
            </div>

            <!-- Table Section -->
            <div class="overflow-auto border rounded-lg">
                <table class="min-w-full text-sm text-left text-gray-800 dark:text-white">
                    <thead class="bg-cyan-600 text-white dark:bg-cyan-700">
                    <tr>
                        <th class="px-4 py-2">Month</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Superior</th>
                        <th class="px-4 py-2">Program</th>
                        <th class="px-4 py-2">AHT (7 min)</th>
                        <th class="px-4 py-2">FCR</th>
                        <th class="px-4 py-2">Quiz</th>
                        <th class="px-4 py-2">QM Score</th>
                        <th class="px-4 py-2">Absen</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800">
                    @foreach ($data as $row)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-2">{{ $row->month }}</td>
                            <td class="px-4 py-2">{{ $row->name }}</td>
                            <td class="px-4 py-2">{{ $row->superior }}</td>
                            <td class="px-4 py-2">{{ $row->program }}</td>
                            <td class="px-4 py-2">{{ $row->aht }}</td>
                            <td class="px-4 py-2">{{ $row->fcr }}</td>
                            <td class="px-4 py-2">{{ $row->quiz }}</td>
                            <td class="px-4 py-2">{{ $row->qm_score }}</td>
                            <td class="px-4 py-2">{{ $row->absen }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
