<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Lapangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Strings;

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
            'lapangan_id' => 'required',
            // 'waktu_mulai' => 'required|date',
            // 'waktu_selesai' => 'required|date',
            'total_harga' => 'required',
        ]);

        // Simpan data penyewaan ke dalam tabel penyewaan
        // Remove the currency symbol (Rp) and dot
        $numericTotalHarga = str_replace(['Rp.', '.'], '', $request->total_harga);

        // Convert the string to a numeric value
        $numericTotalHarga = (float) $numericTotalHarga;
        $waktu_mulai = Carbon::parse($request->waktu_mulai);
        Penyewaan::create([
            'user_id' => Auth::user()->id,
            'lapangan_id' => $request->lapangan_id,
            'waktu_mulai' => now(),
            'waktu_selesai' => now(),
            'waktu_mulai' => $waktu_mulai,
            'waktu_selesai' => $waktu_mulai->clone()->addHours((int)$request->durasi),
            'total_harga' => $numericTotalHarga,
        ]);

        return redirect()->route('penyewaan.index')->with('success', 'Penyewaan berhasil disimpan');
    }
}
