@extends('layouts.app')

@section('content')
<div class="grid grid-cols-3 gap-6">
    <div class="bg-blue-500 text-white p-6 rounded-lg">
        <h2 class="text-2xl font-bold">Total Lapangan</h2>
        <p class="text-4xl mt-2">5</p>
        <p class="mt-2">Lapangan tersedia untuk disewa.</p>
    </div>
    <div class="bg-green-500 text-white p-6 rounded-lg">
        <h2 class="text-2xl font-bold">Total Penyewaan</h2>
        <p class="text-4xl mt-2">20</p>
        <p class="mt-2">Penyewaan yang telah dilakukan.</p>
    </div>
    <div class="bg-yellow-500 text-white p-6 rounded-lg">
        <h2 class="text-2xl font-bold">Pendapatan</h2>
        <p class="text-4xl mt-2">Rp 5.000.000</p>
        <p class="mt-2">Total pendapatan dari penyewaan.</p>
    </div>
    <a href="{{ route('profile.edit') }}">Edit Profil</a>

</div>
@endsection
