<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_location', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('city', 100)->nullable();
            $table->string('latitude', 100)->nullable();
            $table->string('longitude', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('state_abbr', 100)->nullable();
            $table->string('zipcode', 100)->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('users_location');
    }
}
