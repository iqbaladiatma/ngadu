<?php

namespace App\Models;

<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
>>>>>>> dd969e3fd41f68ba60cf3b6117347b1b26e58ea7
}
