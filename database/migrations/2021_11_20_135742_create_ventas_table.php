<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('Cliente');
            $table->string('Celular');
            $table->integer('Cantidad');
            $table->decimal('Total');
            $table->timestamps();
            $table->unsignedInteger('id_p');

        });

        Schema::table('ventas',function (Blueprint $table){
            $table->foreign('id_p')->references('id')->on('productos');           
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
