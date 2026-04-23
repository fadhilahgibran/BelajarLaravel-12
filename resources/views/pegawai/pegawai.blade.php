@extends('layout')

@section('title', 'Daftar Pegawai')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    
    {{-- Menampilkan Notifikasi Sukses --}}
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    {{-- Judul dan Tombol Tambah --}}
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-semibold">Daftar Pegawai</h1>
        <a href="/pegawai/create" class="bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700">Tambah Pegawai</a>
    </div>

    {{-- Tabel Data --}}
    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">No</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">Nama</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">NIP</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">Email</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">Bidang</th>
                    <th class="px-4 py-2 text-center text-sm font-medium text-gray-500">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @forelse($pegawais as $index => $p)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $index + 1 }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $p->nama }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $p->nip }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $p->email }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $p->bidang }}</td>
                    <td class="px-4 py-3 text-center text-sm">
                        
                        {{-- Tombol Edit --}}
                        <a href="/pegawai/{{ $p->id }}/edit" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">Edit</a>
                        
                        {{-- Form Tombol Hapus --}}
                        <form action="/pegawai/{{ $p->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600" 
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                        
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-4 py-6 text-center text-gray-500">Belum ada data pegawai.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection