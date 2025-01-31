@extends('layouts.app')

@section('title', 'Tambah Lapangan')

@section('content')
<div class="bg-white p-5 shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Tambah Lapangan</h2>

    <form action="{{ route('lapangan.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Nama Lapangan</label>
            <input type="text" name="name" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
            <label class="block font-medium">Harga per Jam</label>
            <input type="number" name="price_per_hour" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
            <label class="block font-medium">Deskripsi</label>
            <textarea name="description" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            Simpan
        </button>
    </form>
</div>
@endsection
