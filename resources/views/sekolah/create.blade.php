@extends('layouts.app')

@section('title', 'Tambah Data Sekolah')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Data Sekolah</h1>

    <form action="{{ route('sekolah.store') }}" method="POST">
        @csrf
        
        <!-- Input Nama Sekolah -->
        <div class="mb-4">
            <label for="nama_sekolah" class="block text-sm font-medium text-gray-700">Nama Sekolah</label>
            <input type="text" id="nama" name="nama" required
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                placeholder="Masukkan nama sekolah">
        </div>
        <!-- Input Alamat Sekolah -->
        <div class="mb-4">
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
            <input type="text" id="alamat" name="alamat" required
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                placeholder="Masukkan alamat sekolah">
        </div>
        <!-- Tombol Submit -->
        <div class="mt-8 flex justify-end">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Simpan Data
            </button>
        </div>
    </form>
</div>
@endsection