<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cemail');
            $table->integer('cid');
            $table->string('title');
            $table->string('goal');
            $table->string('tdonors');
            $table->string('objective1');
            $table->string('objective2');
            $table->string('objective3');
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->mediumText('summary');
            $table->mediumText('challenge');
            $table->mediumText('solution');
            $table->mediumText('thanksNote')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
}
