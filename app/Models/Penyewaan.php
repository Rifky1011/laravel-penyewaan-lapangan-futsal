<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = 'penyewaan';
    protected $fillable = ['user_id', 'lapangan_id', 'waktu_mulai', 'waktu_selesai', 'total_harga'];

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }
}
