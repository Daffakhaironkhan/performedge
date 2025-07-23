@extends('layout.master')

@section('page')
    Home
@endsection

@section('title')

@endsection

@section('content')
    <h1>Selamat Datang {{ Auth::user()->name }}!</h1>
@endsection

@section('footer')

@endsection
