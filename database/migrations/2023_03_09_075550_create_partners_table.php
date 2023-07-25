<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image_path')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('chiffre_affaire')->nullable();
            $table->string('portefeuille')->nullable();
            $table->string('part_marche_national')->nullable();
            $table->string('part_marche_cemac')->nullable();
            $table->string('part_marche_international')->nullable();
            $table->foreignId('secteur_id')->nullable();
            $table->foreignId('entreprise_id')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->text('short_description_fr')->nullable();
            $table->text('short_description_en')->nullable();
            $table->string('promoteur')->nullable();
            $table->string('promoteur_image')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
