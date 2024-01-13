<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soalUKK extends Model
{
    use HasFactory;
    protected $table = 'soal_u_k_k_s'; // Ganti dengan nama tabel Anda
    protected $fillable = ['tugas']; // Ganti dengan nama field Anda
}
