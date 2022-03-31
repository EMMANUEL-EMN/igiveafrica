<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cemail');
            $table->string('paymentOption')->default('Mpesa');
            $table->string('amount');
            $table->string('mobile');
            $table->string('donorWall')->default('yes');
            $table->string('fullname');
            $table->string('email');
            $table->string('country');
            $table->string('acknoledged')->default('no');
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
        Schema::dropIfExists('donations');
    }
}
