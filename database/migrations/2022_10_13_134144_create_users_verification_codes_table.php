<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersVerificationCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_verification_codes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('code')->unsigned()->nullable()->unique();
            $table->integer('type')->comment("1 = mobile , 2 = email");
            $table->integer('status')->comment("1 = active , 0 = expire");
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
        Schema::dropIfExists('users_verification_codes');
    }
}
