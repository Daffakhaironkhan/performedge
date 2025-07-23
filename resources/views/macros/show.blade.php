@extends('layout.master')

@section('page')
    Detail Macro
@endsection

@section('title')
    Detail Macro
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Data Macro</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Layanan</th>
                    <td>{{ $macro->layanan }}</td>
                </tr>
                <tr>
                    <th>User</th>
                    <td>{{ $macro->user }}</td>
                </tr>
                <tr>
                    <th>Category 1</th>
                    <td>{{ $macro->category1 }}</td>
                </tr>
                <tr>
                    <th>Category 2</th>
                    <td>{{ $macro->category2 }}</td>
                </tr>
                <tr>
                    <th>Category 3</th>
                    <td>{{ $macro->category3 }}</td>
                </tr>
                <tr>
                    <th>Issue</th>
                    <td>{{ $macro->issue }}</td>
                </tr>
                <tr>
                    <th>Sample Inquiry</th>
                    <td>{{ $macro->sample_inquiry }}</td>
                </tr>
                <tr>
                    <th>Action</th>
                    <td>{{ $macro->action }}</td>
                </tr>
                <tr>
                    <th>Macro Name</th>
                    <td>{{ $macro->macro_name }}</td>
                </tr>
                <tr>
                    <th>Macro</th>
                    <td>{{ $macro->macro }}</td>
                </tr>
                <tr>
                    <th>Template</th>
                    <td>{{ $macro->template }}</td>
                </tr>
            </table>
            <a href="{{ route('macros.index') }}" class="btn btn-primary mt-3">Kembali ke List</a>
        </div>
    </div>
@endsection
