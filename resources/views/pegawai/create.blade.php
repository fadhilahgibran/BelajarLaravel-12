@extends('layout')

@section('title', 'Tambah Pegawai')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <div class="bg-white shadow rounded p-6">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-bold">Tambah Pegawai</h1>
            <a href="/pegawai" class="text-blue-600 hover:underline">Kembali</a>
        </div>
        
        <form action="/pegawai" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1">Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama" class="w-full p-2 border rounded" />
                @error('nama') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1">NIP</label>
                <input type="text" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP" class="w-full p-2 border rounded" />
                @error('nip') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@contoh.com" class="w-full p-2 border rounded" />
                @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1">Bidang</label>
                <input type="text" name="bidang" value="{{ old('bidang') }}" placeholder="Contoh: Keuangan" class="w-full p-2 border rounded" />
                @error('bidang') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-3 mt-6">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                <a href="/pegawai" class="text-gray-600 hover:underline py-2">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection