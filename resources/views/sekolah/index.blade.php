@extends('layouts.app')

@section('title', 'Manajemen Sekolah')

@section('content')
    <div class=" bg-white rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Manajemen Sekolah</h1>
        <div class="flex flex-wrap justify-end mb-4">
        <a href="{{ route('sekolah.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Tambah Sekolah
            </a>

        <div class="flex flex-wrap justify-center w-full space-y-4 mt-16">

            @if($sekolahs->isEmpty())
                <p class="text-gray-600">Tidak ada data sekolah.</p>
            @else
                <table class="w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nama Sekolah</th>
                            <th class="py-2 px-4 border-b">Alamat</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sekolahs as $sekolah)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $sekolah->nama }}</td>
                                <td class="py-2 px-4 border-b">{{ $sekolah->alamat }}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('sekolah.edit',$sekolah->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('sekolah.destroy', $sekolah->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection