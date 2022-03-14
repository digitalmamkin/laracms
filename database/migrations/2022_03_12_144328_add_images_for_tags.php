<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesForTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            //
            $table->string('original')->nullable()->default(null);
            $table->string('thumbnail')->nullable()->default(null);
            $table->string('medium')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {
            //
            $table->dropColumn('original');
            $table->dropColumn('thumbnail');
            $table->dropColumn('medium');
        });
    }
}