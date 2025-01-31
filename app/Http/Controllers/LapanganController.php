<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::all();
        return view('lapangan.index', compact('lapangan'));
    }

    public function create()
    {
        return view('lapangan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga_per_jam' => 'required|integer'
        ]);

        Lapangan::create($request->all());
        return redirect()->route('lapangan.index')->with('success', 'Lapangan berhasil ditambahkan.');
    }
}
