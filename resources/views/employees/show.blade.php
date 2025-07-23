@extends('layout.master')

@section('page')
    Halaman Employee Detail
@endsection

@section('title')
    Detail Employee
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
            <img src="{{ asset('/storage/employees/'.$employee->foto) }}" class="rounded w-full mb-3" alt="Foto {{ $employee->nama }}">
        </div>
        <div class="md:col-span-2 bg-white dark:bg-gray-800 p-4 rounded shadow">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">{{ $employee->nama }}</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                    @php
                        $fields = [
                            'ID Fingerprint' => $employee->id_finger,
                            'Team Leader' => $employee->team_leader,
                            'Supervisor' => $employee->supervisor,
                            'Level' => $employee->level,
                            'Program' => $employee->program,
                            'Email' => $employee->email,
                            'Gender' => $employee->gender,
                            'Age' => $employee->age,
                            'Alamat' => $employee->alamat,
                            'Tempat Tanggal Lahir' => $employee->ttl,
                            'Join Date' => $employee->join_date,
                            'Tenure (bulan)' => $employee->tenure
                        ];
                    @endphp
                    @foreach ($fields as $label => $value)
                        <tr class="border-b border-gray-200 dark:border-gray-600">
                            <th class="py-2 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $label }}</th>
                            <td class="py-2 px-4">{{ $value }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('employees.index') }}" class="inline-block mt-4 text-white bg-blue-600 hover:bg-blue-700 font-medium rounded px-4 py-2">
                <i class="fas fa-arrow-left mr-2"></i>Back to List
            </a>
        </div>
    </div>
@endsection
