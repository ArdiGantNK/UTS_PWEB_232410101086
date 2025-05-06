@extends('layouts.appadmin')

@section('title','Profile')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Profil Admin Aupaint</h1>
            <p class="mt-2 text-gray-600">Kelola informasi akun Anda</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            <div class="bg-gray-900 px-6 py-4">
                <h2 class="text-xl font-semibold text-white">Informasi Akun</h2>
            </div>

            <div class="p-6 space-y-6">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="flex items-center bg-gray-50 rounded-lg px-4 py-3 border border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-gray-800">{{ $username ?? 'Guest' }}</span>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="flex items-center bg-gray-50 rounded-lg px-4 py-3 border border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span class="text-gray-800">••••••••</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Password disembunyikan</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
