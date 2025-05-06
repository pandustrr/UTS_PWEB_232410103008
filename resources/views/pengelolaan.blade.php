@extends('layouts.app')

@section('title', 'Pengelolaan Menu')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6 text-blue-600">Pengelolaan Menu</h1>

        <div class="mb-6 bg-blue-50 p-4 rounded-lg">
            <p class="text-lg">Halo bro, selamat datang <span
                class="font-semibold text-blue-700">{{ $username ?? 'Admin' }}</span>!</p>
        </div>

        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-4">
            Tambah Menu
        </button>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-blue-500">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama Menu</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Kategori</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Harga</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Stok</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($widgets as $widget)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $widget['id'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $widget['name'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $widget['category'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Rp {{ number_format($widget['price'] ?? 0, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $widget['jumlah'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="text-blue-600 hover:text-blue-800 mr-3">Edit</button>
                                <button class="text-red-600 hover:text-red-800">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('components.modal')
    </div>
@endsection

