<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('advertisement_name');
            $table->longText('advertisement_img')->nullable();
            $table->longText('advertisement_link')->nullable();
            $table->string('advertisement_position')->nullable();
            $table->boolean('advertisement_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('advertisement_infos');
    }
}
