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
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('slug');
            $table->string('Cliente');
            $table->string('Celular');
            $table->integer('Cantidad');
            $table->decimal('Total');

            $table->foreignId('id_p')->references('id')->on('productos');

            $table->timestamps();

            
           

        });

       //Schema::table('ventas',function (Blueprint $table){
           // $table->foreign('id_p')->references('id')->on('productos');           
        //});


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
