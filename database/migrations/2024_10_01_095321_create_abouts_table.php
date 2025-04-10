<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->string('helper');
            $table->string('serivce_title_1');
            $table->string('serivce_desc_1');
            $table->string('serivce_title_2');
            $table->string('serivce_desc_2');
            $table->string('serivce_title_3');
            $table->string('serivce_desc_3');
            $table->string('serivce_title_4');
            $table->string('serivce_desc_4');
            $table->text('image');
            $table->string('alt');
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
        Schema::dropIfExists('abouts');
    }
}
