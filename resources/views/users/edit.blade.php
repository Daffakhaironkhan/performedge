@extends('layout.master')

@section('page', 'User')
@section('title', 'Edit Data User')

@section('content')
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">


                @foreach ([
                    'name' => 'text',
                    'email' => 'email',
                    'password' => 'text',
                ] as $field => $type)
                    <div>
                        <label for="{{ $field }}" class="block mb-1 font-medium dark:text-white capitalize">{{ str_replace('_', ' ', $field) }}</label>
                        <input type="{{ $type }}" name="{{ $field }}" id="{{ $field }}"
                               class="w-full border-gray-300 rounded dark:bg-gray-700 dark:text-white dark:border-gray-600 @error($field) border-red-500 @enderror"
                               value="{{ old($field, $user->$field) }}">
                        @error($field) <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>

            <div class="flex justify-start gap-3">
                <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Update</button>
                <a href="{{ route('users.index') }}" class="px-4 py-2 text-white bg-gray-500 rounded hover:bg-gray-600">Kembali</a>
            </div>
        </form>
    </div>
@endsection
