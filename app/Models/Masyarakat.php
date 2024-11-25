<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Masyarakat extends Authenticable
{
    use HasFactory;
    protected $table = 'masyarakats';
    protected $primarykey = 'nik';
    protected $fillable = [
        'nama',
        'email',
        'email_verified_at',
        'username',
        'telp',
        'provider_id',
        'provider',
    ];
}
