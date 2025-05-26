<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Sekolah extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nama',
        'alamat',
    ];

    // Contoh relasi ke tabel lain (opsional)
    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
