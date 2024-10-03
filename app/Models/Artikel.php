<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    // protected $fillable = [];
    use HasFactory;
    protected $fillable=[
        'judul',
        'kategori',
        'deskripsi',
        'isi',
        'foto'
    ];
}
