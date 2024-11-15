<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapans';
    //
    protected $primarykey = 'id_tanggapan';
    protected $fillable = [
        'id_tanggapan',
        'id_pengaduan',
        'tgl_tanggapan',
        'isi_tanggapan',
        'id_petugas',
        'level',
    ];
    public function tanggapans(): HasMany
    {
        return $this->hasMany(Tanggapan::class, 'id_pengaduan');
    }
    public function petugas(): HasMany
    {
        return $this->hasMany(Tanggapan::class, 'id_petugas');
    }
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
>>>>>>> dd969e3fd41f68ba60cf3b6117347b1b26e58ea7
}
