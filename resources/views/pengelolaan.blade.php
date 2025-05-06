@extends('layouts.appadmin')

@section('title','Pengelolaan')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Pengelolaan Produk Cat</h1>

    <div class="mb-4">
        <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">+ Tambah Produk</a>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold">NO</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Nama Produk</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Deskripsi</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Stok</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Warna</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($produk as $index => $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item['nama'] }}</td>
                        <td class="px-6 py-4">{{ $item['deskripsi'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item['stok'] }}</td>
                        <td class="px-6 py-4">
                            <div class="w-8 h-4 rounded" style="background-color: {{ $item['warna'] }}"></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
