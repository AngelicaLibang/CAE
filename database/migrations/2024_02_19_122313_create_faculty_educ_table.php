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
        Schema::create('faculty_educ', function (Blueprint $table) {
            $table->integer('faculty_id');
            $table->integer('has_unders');
            $table->string('unders_enrolled', 100);
            $table->integer('unders_year_received');
            $table->integer('has_masters');
            $table->string('masters_enrolled', 100);
            $table->integer('masters_year_received');
            $table->integer('has_doctors');
            $table->string('doctors_enrolled', 100);
            $table->integer('doctors_year_received');
            $table->integer('academe_points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty_educ');
    }
};
