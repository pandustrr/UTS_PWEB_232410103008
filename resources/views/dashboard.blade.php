@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6">

        <div class="bg-blue-50 p-4 rounded-lg mb-6">
            <p class="text-lg">Selamat datang, <span class="font-semibold text-blue-700">{{ $username }}</span>:D</p>
            <p class="text-sm text-gray-500 mt-1">Hari ini: {{ now()->format('l, d F Y') }}</p>
        </div>

        <div class="flex flex-col items-center justify-center">
            <a href="#"
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-8">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg "
                    src="{{ asset('images/hk.jpg') }}" alt="gambar">
                <div class="flex flex-col justify-center p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Himpunan Kosong</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kafe dengan tema grafiti dan neon yang menyala sebagai tempat nugas dan nongkrong para remaja ror</p>
                </div>
            </a>
        </div>

        <div class="flex flex-wrap justify-center gap-6">
            <div
                class="bg-orange-50 p-6 rounded-lg border border-orange-200 w-64 text-center shadow-sm flex flex-col items-center">
                <h2 class="text-lg font-semibold text-orange-700 mb-2">Total Menu</h2>
                <p class="text-3xl font-bold text-orange-600 mb-4">15</p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none transition-colors">
                    More
                </button>
            </div>

            <div
                class="bg-blue-50 p-6 rounded-lg border border-blue-200 w-64 text-center shadow-sm flex flex-col items-center">
                <h2 class="text-lg font-semibold text-blue-700 mb-2">Profit</h2>
                <p class="text-3xl font-bold text-blue-600 mb-4">10.000.000</p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none transition-colors">
                    More
                </button>
            </div>

            <div
                class="bg-gray-50 p-6 rounded-lg border border-gray-200 w-64 text-center shadow-sm flex flex-col items-center">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Stok Habis</h2>
                <p class="text-3xl font-bold text-gray-600 mb-4">3</p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none transition-colors">
                    More
                </button>
            </div>
        </div>
    </div>

@endsection
