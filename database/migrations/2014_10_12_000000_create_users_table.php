<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('role_id');
            $table->boolean('isVerified')->default(false);
            $table->string('is_vaccinated');
            $table->string('vaccine_brand')->nullable();
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('avatar');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('zip');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('date_1')->nullable();
            $table->timestamp('date_2')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
