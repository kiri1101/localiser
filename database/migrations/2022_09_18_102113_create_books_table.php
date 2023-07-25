<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();

            $table->string('title_en')->nullable();
            $table->string('title_fr')->nullable();

            $table->text('content_section_1_fr')->nullable();
            $table->text('content_section_1_en')->nullable();

            $table->text('summary_fr')->nullable();
            $table->text('summary_en')->nullable();

            $table->longText('description_fr')->nullable();
            $table->longText('description_en')->nullable();

            $table->longText('short_description_fr')->nullable();
            $table->longText('short_description_en')->nullable();

            $table->string('link_en')->nullable();
            $table->string('link_fr')->nullable();

            $table->string('number_visits')->nullable();
            $table->integer('number_subs')->nullable();
            $table->string('number_like')->nullable();
            $table->string('number_dislike')->nullable();
            $table->string('published_by')->nullable();
            $table->string('status')->nullable();

            $table->integer('post_detail_type')->nullable();
            $table->integer('post_read_time')->nullable();

            $table->dateTime('publish_date')->nullable();

            $table->string('author')->nullable();

            $table->string('banner')->nullable();

            $table->foreignId('category_id')->nullable();

            $table->string('book_path')->nullable();

            $table->string('image_path')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
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
        Schema::dropIfExists('books');
    }
}
