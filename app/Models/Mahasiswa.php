<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang digunakan
    protected $table = 'mahasiswa_tbl';  // Nama tabel di database Anda

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nim',
        'nama_lengkap',
        'jurusan',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp',
        'email',
        'alamat_tinggal',
        'foto',
    ];
}
