<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    // Specify the table name explicitly
    protected $table = 'akreditasis';

    protected $fillable = [
        'status_peringkat',
        'doktor_jumlah',
        'doktor_persentase',
        'magister_jumlah',
        'magister_persentase',
        'sarjana_jumlah',
        'sarjana_persentase',
        'profesi_jumlah',
        'profesi_persentase',
        'total_jumlah',
        'total_persentase',
    ];
}
