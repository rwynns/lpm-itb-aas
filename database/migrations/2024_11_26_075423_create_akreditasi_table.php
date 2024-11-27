<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->id();
            $table->string('status_peringkat');
            $table->integer('doktor_jumlah');
            $table->float('doktor_persentase');
            $table->integer('magister_jumlah');
            $table->float('magister_persentase');
            $table->integer('sarjana_jumlah');
            $table->float('sarjana_persentase');
            $table->integer('profesi_jumlah');
            $table->float('profesi_persentase');
            $table->integer('total_jumlah');
            $table->float('total_persentase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akreditasi');
    }
};
