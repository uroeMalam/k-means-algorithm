<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_data', function (Blueprint $table) {
            $table->id();
            $table->string('tahun',5);
            $table->float('luas_tanam',10,5);
            $table->float('luas_panen',10,5);
            $table->float('produktivitas',10,5);
            $table->float('produksi',10,5);
            $table->foreignId('id_kabupaten')
                ->constrained('tb_kabupaten')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('id_kecamatan')
                ->constrained('tb_kecamatan')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_data');
    }
};
