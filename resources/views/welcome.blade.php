@extends('layouts.app')

@section('title','Welcome')
@section('content')

<body class="bg-gray-50 text-gray-800">
    <main class="min-h-screen p-4 md:p-8">

      <header class="text-center mb-8">
        <h1 class="text-4xl font-bold">Aupaint</h1>
        <p class="text-lg text-gray-600">Toko Cat Terlengkap dan Terpercaya</p>
      </header>

      <section>
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Katalog Warna Cat</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/1.jpg') }}" alt="Absolutte Yellow" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Absolutte Yellow</h3>
              <p class="text-sm text-gray-600 mb-4">Warna cerah dan hangat cocok untuk ruang keluarga.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/2.jpg') }}" alt="Bubblegum" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Bubblegum</h3>
              <p class="text-sm text-gray-600 mb-4">Memberikan kesan tenang dan damai, cocok untuk kamar tidur.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/3.jpg') }}" alt="Ultra Green" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Ultra Green</h3>
              <p class="text-sm text-gray-600 mb-4">Nuansa alami yang cocok untuk ruang santai dan taman.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/4.jpg') }}" alt="Deepsea" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Deepsea</h3>
              <p class="text-sm text-gray-600 mb-4">Pilihan serbaguna yang cocok untuk semua ruangan.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/5.jpg') }}" alt="Black magic" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Black magic</h3>
              <p class="text-sm text-gray-600 mb-4">Memberi kesan mewah cocok untuk rumah, industri maupun kendaraan.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/6.jpg') }}" alt="Sports Blue" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Sports Blue</h3>
              <p class="text-sm text-gray-600 mb-4">Pilihan modern untuk tampil bergaya minimalis.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/7.jpg') }}" alt="Ash White" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Ash White</h3>
              <p class="text-sm text-gray-600 mb-4">Warna lembut yang cocok untuk kamar anak atau ruang santai.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition transform hover:-translate-y-2 hover:scale-105">
            <img src="{{ asset('img/8.jpg') }}" alt="Red Apples" class="w-full h-48 object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold">Red Apples</h3>
              <p class="text-sm text-gray-600 mb-4">Memberi kesan misterius untuk ruangan khusus maupun kendaraan.</p>
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded w-full">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
@endsection
