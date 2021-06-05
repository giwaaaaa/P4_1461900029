<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    Protected $table = 'siswa';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama_siswa',
        'alamat',
    ];
}
