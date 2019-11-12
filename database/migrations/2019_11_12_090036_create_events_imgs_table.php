<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_imgs', function (Blueprint $table) {
            $table->bigIncrements('id_imgs_events');
            $table->string('img_event_name');
            $table->int('nbLikes');
            $table->bigIncrements('id_events');
            $table->bigIncrements('id_users');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_imgs');
    }
}
