<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('room_no')->nullable();
            $table->string('roll_no');
            $table->string('parent_name');
            $table->string('DOB');
            $table->string('gender');
            $table->string('phone');
            $table->string('address');
            $table->string('district');
            $table->string('blood_group');
            $table->string('image')->nullable();
            $table->string('password');
            $table->string('mark1')->nullable();
            $table->string('mark2')->nullable();
            $table->string('mark3')->nullable();
            $table->string('mark4')->nullable();
            $table->string('mark5')->nullable();
            $table->string('mark6')->nullable();
            $table->string('attend1')->nullable();
            $table->string('attend2')->nullable();
            $table->string('attend3')->nullable();
            $table->string('attend4')->nullable();
            $table->string('attend5')->nullable();
            $table->string('attend6')->nullable();
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
        Schema::dropIfExists('stud');
    }
}
