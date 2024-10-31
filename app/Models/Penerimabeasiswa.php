<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaBeasiswa extends Model
{
    use HasFactory;

    protected $table = 'penerima_beasiswa';

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'alamat',
        'jurusan',
        'tahun_angkatan',
    ];
}
