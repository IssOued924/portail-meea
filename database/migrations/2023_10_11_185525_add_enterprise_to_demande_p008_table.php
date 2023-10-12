<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->string('siege_social')->nullable();
<<<<<<< HEAD
            $table->string('boite_postale')->nullable();
=======
            $table->string('boite_postal')->nullable();
>>>>>>> b1
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demande_p008_s', function (Blueprint $table) {
            $table->dropColumn('siege_social');
<<<<<<< HEAD
            $table->dropColumn('boite_postale');
=======
            $table->dropColumn('boite_postal');
>>>>>>> b1
        });
    }
};
