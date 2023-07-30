<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('description')->nullable();

            $table->text('short_description')->nullable();

            $table->string('slogan')->nullable();

            $table->string('raison_social');
            $table->string('carte_contribuable')->unique()->nullable();
            $table->string('registre_commerce')->unique()->nullable();
            $table->string('statut_juridique')->nullable();
            $table->string('type_entreprise')->nullable();

            $table->string('logo')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('photo_path2')->nullable();
            $table->string('photo_path3')->nullable();
            $table->string('photo_path4')->nullable();
            $table->string('photo_path5')->nullable();
            $table->string('photo_path6')->nullable();
            $table->string('photo_path7')->nullable();
            $table->string('photo_path8')->nullable();
            $table->string('photo_path9')->nullable();
            $table->string('photo_path10')->nullable();
            $table->string('photo_path11')->nullable();
            $table->string('photo_path12')->nullable();
            $table->string('photo_path13')->nullable();
            $table->string('photo_path14')->nullable();
            $table->string('photo_path15')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('social_media_facebook')->nullable();
            $table->string('social_media_twitter')->nullable();
            $table->string('social_media_linkedin')->nullable();
            $table->string('social_media_whatsapp')->nullable();
            $table->string('social_media_instagram')->nullable();

            $table->string('chiffres_affaires')->nullable();
            $table->text('services')->nullable();
            $table->text('produits')->nullable();
            $table->string('capital')->nullable();
            $table->string('nombre_employees')->nullable();
            $table->string('note_moyennes')->nullable();
            $table->string('nombre_commentaire')->nullable();
            $table->string('status_localizeur')->nullable();
            $table->foreignId('SecteurActivite_id')->nullable();

            $table->foreignId('localisation_pays_id')->nullable();
            $table->foreignId('localisation_street_id')->nullable();
            $table->foreignId('localisation_ville_id')->nullable();
            $table->string('localisation_adresse')->nullable();
            $table->string('localisation_bp')->nullable();
            $table->string('localisation_tel')->nullable();
            $table->string('localisation_tel_2')->nullable();
            $table->string('localisation_email')->nullable();
            $table->string('localisation_fax')->nullable();
            $table->string('localisation_siteweb')->nullable();

            $table->integer('rating')->nullable();
            $table->integer('number_likes')->nullable();
            $table->integer('number_visits')->nullable();
            $table->integer('number_comments')->nullable();
            $table->boolean('top_10')->nullable()->default(false);
            $table->boolean('top_30')->nullable()->default(false);
            $table->boolean('top_50')->nullable()->default(false);
            $table->boolean('top_100')->nullable()->default(false);
            $table->boolean('display')->nullable()->default(false);



            $table->integer('position')->nullable();

            $table->timestamp('deleted_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
}
