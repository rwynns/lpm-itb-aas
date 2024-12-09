<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalAudit extends Model
{
    use HasFactory;

    protected $table = 'jadwal_audit';

    protected $fillable = [
        'tanggal_audit',
        'jam_audit',
        'nama_asesor',
        'program_studi',
        'tempat',
    ];
}
