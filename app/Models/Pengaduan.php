<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    //
    protected $primarykey = 'id_pengaduan';
    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'judul_laporan',
        'isi_laporan',
        'tgl_laporan',
        'lokasi_laporan',
        'kategori_laporan',
        'foto',
        'status',
    ];
}
