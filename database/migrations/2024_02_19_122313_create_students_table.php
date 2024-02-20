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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id', true);
            $table->string('first_name', 40);
            $table->string('last_name', 40);
            $table->date('birthdate');
            $table->integer('year_level');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('mobile_number', 50);
            $table->string('email_address', 100);
            $table->dateTime('updated_at')->useCurrent();
            $table->dateTime('created_at')->useCurrent();
            $table->date('date_enrolled')->nullable();
            $table->string('province', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
