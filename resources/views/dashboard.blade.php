@extends('layouts.appadmin')

@section('title','Dashboard')
@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto">

        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Selamat datang, {{ $username ?? 'Guest' }}!</h1>
            <p class="text-gray-600 mt-1">Kepuasan pelanggan adalah prioritas kami <span class="font-semibold">aupaint</span>.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-5 rounded-2xl shadow hover:shadow-md transition">
                <h2 class="text-gray-600 text-sm">Total Transaksi</h2>
                <p class="text-2xl font-semibold text-blue-600 mt-1">1.234</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow hover:shadow-md transition">
                <h2 class="text-gray-600 text-sm">Pelanggan</h2>
                <p class="text-2xl font-semibold text-green-600 mt-1">567</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow hover:shadow-md transition">
                <h2 class="text-gray-600 text-sm">Pesanan Baru</h2>
                <p class="text-2xl font-semibold text-yellow-600 mt-1">45</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow hover:shadow-md transition">
                <h2 class="text-gray-600 text-sm">Feedback</h2>
                <p class="text-2xl font-semibold text-red-500 mt-1">23</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-xl font-bold text-gray-700 mb-4">Aktivitas Terbaru</h2>
            <ul class="divide-y divide-gray-200">
                <li class="py-3 flex justify-between items-center">
                    <span class="text-gray-600">Pesanan sebanyak 1023 telah diproses</span>
                    <span class="text-sm text-gray-400">2 menit lalu</span>
                </li>
                <li class="py-3 flex justify-between items-center">
                    <span class="text-gray-600">Feedback baru dari pelanggan</span>
                    <span class="text-sm text-gray-400">10 menit lalu</span>
                </li>
                <li class="py-3 flex justify-between items-center">
                    <span class="text-gray-600">Stok Cet ditambahkan</span>
                    <span class="text-sm text-gray-400">1 jam lalu</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
