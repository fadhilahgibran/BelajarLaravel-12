@extends('layout')

@section('title', 'About Page')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-row gap-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <h1 class="text-3xl font-bold underline text-blue-600">
                    Selamat datang di halaman About!
                </h1>
                <p class="mt-4 text-gray-700">Saya sedang belajar Laravel di MacBook Air.</p>
            </div>
        </div>
    </div>
@endsection