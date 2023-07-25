<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advideos', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('image_path')->nullable();
            $table->text('short_description_fr')->nullable();
            $table->text('short_description_en')->nullable();
            $table->foreignId('company_id')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->foreignId("added_by")->nullable();
            $table->timestamp("deleted_at")->default(null)->nullable();

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
        Schema::dropIfExists('advideos');
    }
}
