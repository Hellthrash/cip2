<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id_res')->unique();
            $table->string('motive', 150);
            $table->string('program');
            $table->enum('confirm',['0','1']);
            $table->date('confirm_date');
            $table->enum('payment_m','cash','credit_card','e_transfer');
            $table->integer('room');

            //fk usuario responsable 
            $table->string('user_id')->unsigned();

            //pk
            $table->primary('id_res');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
