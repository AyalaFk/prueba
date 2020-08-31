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
            $table->time('hora')->nullable();
            $table->date('fecha')->nullable();
            $table->float('monto_a')->nullable();
            $table->float('monto_b')->nullable();
            $table->date('vencimiento')->nullable();
            $table->integer('codigo')->nullable();
            $table->text('anio_cuota')->nullable();
            $table->integer('cuenta')->nullable();
			$table->text('cuenta_nombre')->nullable();
			$table->string('tipo', 3)->nullable();
			$table->enum('tipo_pago', ['NPE', 'BAR'])->nullable();

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
