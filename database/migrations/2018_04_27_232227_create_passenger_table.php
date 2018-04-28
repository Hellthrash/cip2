<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passenger', function (Blueprint $table) {
            $table->increments('id_passenger')->unique();
            $table->string('name_1');
            $table->string('name_2');
            $table->string('lName_1');
            $table->string('lName_2');
            $table->string('nationality');
            $table->string('country_o'); //country of origin
            $table->string('country_r'); //country of residence
            $table->string('university');
            $table->enum('share_room',['0','1']); //0:no 1:yes

            //fk conjunto de huespedes asociados 
            $table->string('passengers_id')->unsigned();
            //fk docente solicitante
            $table->string('user_id')->unsigned();

            //pk
            $table->primary('id_passenger');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passenger');
    }
}
