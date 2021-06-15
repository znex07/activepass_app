<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_partners', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('business_name');
            $table->string('business_type');
            $table->string('business_address');
            $table->string('telephone');
            $table->string('cellphone');
            $table->string('business_email');
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
        Schema::dropIfExists('health_partners');
    }
}
