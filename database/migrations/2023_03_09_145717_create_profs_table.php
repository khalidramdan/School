<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profs', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('cin')->nullable();
            $table->string('adresse')->nullable();
            $table->string('dateInscription', 0)->nullable();
            $table->string('tel', 20)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('description');
            $table->integer('departement_id')->nullable()->index('departement_fk');
            $table->string('dateNaissance', 0)->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profs');
    }
};
