<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index()
    {
        $penyewaan = Penyewaan::all();
        return view('penyewaan.index', compact('penyewaan'));
    }
    
    public function create()
    {
        $lapangan = Lapangan::all(); // Ambil semua data lapangan
        return view('penyewaan.create', compact('lapangan'));
    }

    public function store(Request $request)
    {
        // Validasi inputan jika perlu
        $request->validate([
            'user_id' => 'required',
            'lapangan_id' => 'required',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date',
            'total_harga' => 'required|integer',
        ]);

        // Simpan data penyewaan ke dalam tabel penyewaan
        Penyewaan::create([
            'user_id' => $request->user_id,
            'lapangan_id' => $request->lapangan_id,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'total_harga' => $request->total_harga,
        ]);

        return redirect()->route('penyewaan.index')->with('success', 'Penyewaan berhasil disimpan');
    }
}
