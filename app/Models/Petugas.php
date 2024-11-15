<?php

namespace App\Models;

<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
>>>>>>> dd969e3fd41f68ba60cf3b6117347b1b26e58ea7
}
