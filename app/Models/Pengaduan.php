<?php

namespace App\Models;

<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
>>>>>>> dd969e3fd41f68ba60cf3b6117347b1b26e58ea7
}
