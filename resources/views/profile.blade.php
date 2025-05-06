@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6 max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-blue-600">Profile</h1>

    <div class="mb-6 bg-blue-50 p-4 rounded-lg">
        <p class="text-lg">Selamat datang, <span class="font-semibold text-blue-700">{{ $username }}</span>!</p>
        <p class="text-sm text-gray-500 mt-1">Bergabung sejak: Mei 2025</p>
    </div>

    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">Informasi Dasar</h2>
        <div class="grid gap-4 md:grid-cols-2">
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Nama Lengkap</p>
                <p class="font-medium">Pandu Satria</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Tanggal Lahir</p>
                <p class="font-medium">28 Juli 2004</p>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">Informasi Kontak</h2>
        <div class="grid gap-4 md:grid-cols-2">
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-medium">232410103008@unej.co.id</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Nomor Telepon</p>
                <p class="font-medium">085770052404</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Alamat</p>
                <p class="font-medium">Jl. Semeru XII/p15</p>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2"> Akun</h2>
        <div class="grid gap-4 md:grid-cols-2">
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Username</p>
                <p class="font-medium">{{ $username }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-sm text-gray-500">Status Akun</p>
                <p class="font-medium text-green-600">Aktif</p>
            </div>
        </div>
    </div>

    <div class="flex justify-end space-x-4 pt-4">
        <button class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
            Edit Profil
        </button>
    </div>
</div>
@endsection
