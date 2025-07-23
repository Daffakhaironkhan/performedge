@extends('layout.master')

@section('page', 'Flow Handling')
@section('title', 'Tambah Flow Handling')

@section('content')
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
        <form action="{{ route('flow_handlings.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                @foreach ([
                    'program' => ['-- Pilih Program --', ['1', '2', '3']],
                    'user' => ['-- Pilih User --', ['1', '2']],
                    'category1' => ['-- Pilih Category 1 --', ['regulasi', 'plafrom']],
                    'category2' => ['-- Pilih Category 2 --', ['textA', 'textB']],
                    'category3' => ['-- Pilih Category 3 --', ['textA', 'textB']],
                ] as $field => [$placeholder, $options])
                    <div>
                        <label for="{{ $field }}" class="block mb-1 font-medium dark:text-white capitalize">{{ $field }}</label>
                        <select name="{{ $field }}" id="{{ $field }}" class="w-full border-gray-300 rounded dark:bg-gray-700 dark:text-white dark:border-gray-600 @error($field) border-red-500 @enderror">
                            <option value="">{{ $placeholder }}</option>
                            @foreach ($options as $option)
                                <option value="{{ $option }}" {{ old($field) == $option ? 'selected' : '' }}>{{ $option }}</option>
                            @endforeach
                        </select>
                        @error($field) <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                @endforeach

                @foreach ([
                    'issue' => 'text',
                    'sample_inquiry' => 'text',
                    'flow_handling_name' => 'text',
                    'link' => 'url'
                ] as $field => $type)
                    <div>
                        <label for="{{ $field }}" class="block mb-1 font-medium dark:text-white capitalize">{{ str_replace('_', ' ', $field) }}</label>
                        <input type="{{ $type }}" name="{{ $field }}" id="{{ $field }}"
                               class="w-full border-gray-300 rounded dark:bg-gray-700 dark:text-white dark:border-gray-600 @error($field) border-red-500 @enderror"
                               value="{{ old($field) }}">
                        @error($field) <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                @endforeach
            </div>

            <div class="flex justify-start gap-3">
                <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Save</button>
                <button type="reset" class="px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600">Reset</button>
            </div>
        </form>
    </div>
@endsection
