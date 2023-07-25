<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_categories', function (Blueprint $table) {
            $table->id();
            $table->string('code_name')->nullable()->unique();
            $table->foreignId('parent_category')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('description_fr')->nullable();
            $table->string('description_en')->nullable();
            $table->string('short_description_fr')->nullable();
            $table->string('short_description_en')->nullable();
            $table->string('link_en')->nullable();
            $table->string('link_fr')->nullable();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('book_categories');
    }
}
