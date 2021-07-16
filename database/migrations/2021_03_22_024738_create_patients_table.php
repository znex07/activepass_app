<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id');
            $table->integer('doc_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('phone_number');
            $table->string('isVerified');
            $table->string('floor_no');
            $table->string('house_no');
            $table->string('email');
            $table->string('profile_pic')->nullable();
            $table->string('path')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('patients');
    }
}
