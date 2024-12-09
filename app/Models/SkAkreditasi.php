<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkAkreditasi extends Model
{
    use HasFactory;

    protected $fillable = ['file_path'];

    // Tambahkan ini
    protected $table = 'sk_akreditasi';
}
