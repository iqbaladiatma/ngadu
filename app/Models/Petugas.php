<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Authenticable
{
    use HasFactory;
    protected $table = 'petugas';
    //
    protected $primarykey = 'id_petugas';
    protected $fillable = [
        'id_petugas',
        'nama',
        'email',
        'password',
        'telp',
        'Level',
    ];
}
