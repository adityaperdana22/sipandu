<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduks extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $fillable = [
        'user_id',
        'nik',
        'nama',
        'alamat',
        'rt',
        'rw',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'status_kawin',
        'agama',
        'kewarganegaraan',
        'pendidikan',
        'pekerjaan',
    ];
}
