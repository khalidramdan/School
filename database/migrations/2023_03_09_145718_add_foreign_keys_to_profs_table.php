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
        Schema::table('profs', function (Blueprint $table) {
            $table->foreign(['departement_id'], 'departement_fk')->references(['id'])->on('departements')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profs', function (Blueprint $table) {
            $table->dropForeign('departement_fk');
        });
    }
};
