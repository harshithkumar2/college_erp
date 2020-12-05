<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_id')->unique();
            $table->string('room_no')->nullable();
            $table->string('dob');
            $table->string('id_no');
            $table->string('phone');
            $table->string('address');
            $table->string('qualification');
            $table->string('experience');
            $table->string('gender');
            $table->string('image');
            $table->string('password')->nullable();
            $table->integer('approve');
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
        Schema::dropIfExists('teacher');
    }
}
