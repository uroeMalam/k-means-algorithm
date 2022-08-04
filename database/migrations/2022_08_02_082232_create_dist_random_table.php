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
        Schema::create('dist_random', function (Blueprint $table) {
            $table->id();
            $table->string('center_name',255);
            $table->integer('tahun');
            $table->foreignId('id_kabupaten')
                ->constrained('tb_kabupaten')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('id_data')
                ->constrained('tb_data')
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
        Schema::dropIfExists('dist_random');
    }
};
