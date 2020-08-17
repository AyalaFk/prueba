<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->text('npe')->nullable();
            $table->text('decodificado')->nullable();
            $table->text('hora')->nullable();
            $table->text('fecha')->nullable();
            $table->text('monto_a')->nullable();
            $table->text('monto_b')->nullable();
            $table->text('vencimiento')->nullable();
            $table->text('codigo')->nullable();
            $table->text('anio_cuota')->nullable();
            $table->text('cuenta')->nullable();


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
        Schema::dropIfExists('pagos');
    }
}
