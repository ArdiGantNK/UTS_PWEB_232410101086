@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-white p-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl overflow-hidden transition-all duration-300 hover:shadow-3xl">

        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 p-6 text-center">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('img/AU.png') }}" alt="Aupaint Logo" class="h-15 w-15"></img>
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">Welcome to Admin Aupaint</h1>
            <p class="text-blue-100">Hayuk Login dulu</p>
        </div>

        <div class="p-8">

            @if($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-3">
                            @foreach ($errors->all() as $error)
                                <p class="text-sm text-red-700">{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif


            <form method="POST" action="{{ route('YukLogin') }}" class="space-y-6">
                @csrf

                <div class="space-y-2">
                    <label for="Username" class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input
                            type="text"
                            name="Username"
                            id="Username"
                            value="{{ old('Username') }}"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 border-gray-300 rounded-md border"
                            placeholder="isi username disini"
                            required
                            autofocus
                        >
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-3 py-3 border-gray-300 rounded-md border"
                            placeholder="isi password disini"
                            required
                        >
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out transform hover:-translate-y-0.5">
                        Sign in
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-gray-50 px-8 py-4 text-center">
            <p class="text-xs text-gray-500">
                Don't have an account? <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium">Yuk buat</a>
            </p>
        </div>
    </div>
</div>
@endsection
