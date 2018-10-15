<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositoPendientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposito_pendientes', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->char('cod_local',3);
            $table->string('dia_mes',10);
            $table->dateTime('fecha_mes');
            $table->char('num_doc_jef_zona',8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposito_pendientes');
    }
}
