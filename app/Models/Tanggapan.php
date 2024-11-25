<?php

namespace App\Models;

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
}
