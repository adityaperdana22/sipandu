<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasis extends Model
{
    use HasFactory;
    protected $table = 'informasi';
    protected $fillable = [
        'category_id',
        'informasi_title',
        'informasi_slug',
        'informasi_deskripsi',
        'informasi_gambar',
        'informasi_lampiran',
    ];
}
