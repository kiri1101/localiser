<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streets', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('sub_description')->nullable();
            $table->string('description')->nullable();
            $table->string('number_enterprises')->nullable();
            $table->string('banner')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('photo_path2')->nullable();
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
        Schema::dropIfExists('streets');
    }
}
