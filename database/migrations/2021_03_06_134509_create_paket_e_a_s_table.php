<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketEASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_e_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('name_deposit');
            $table->integer('deposit')->nullable();
            $table->integer('low_risk');
            $table->integer('medium_risk');
            $table->integer('high_risk');
            $table->integer('loss_limit');
            $table->integer('max_deposit');
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
        Schema::dropIfExists('paket_e_a_s');
    }
}
