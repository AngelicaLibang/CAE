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
        Schema::create('faculty', function (Blueprint $table) {
            $table->integer('faculty_id', true);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('birthdate');
            $table->string('gender', 50);
            $table->string('mobile_number', 20);
            $table->string('email_address', 100);
            $table->date('date_entered');
            $table->string('position', 50);
            $table->string('department', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty');
    }
};
