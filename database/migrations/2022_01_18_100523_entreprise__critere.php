<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntrepriseCritere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('critere_entreprise', function (Blueprint $table) {
                    $table->id();
                    $table->foreignId('enterprise_id');
                     $table->foreignId('critere_id');
                    $table->integer('grade');
                    $table->timestamps();
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
        Schema::dropIfExists('critere_entreprise');
    }
}
