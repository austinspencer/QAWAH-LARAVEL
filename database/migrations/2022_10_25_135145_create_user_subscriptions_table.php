<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('pkg_id')->unsigned()->nullable()->default(0);
            $table->string('pkg_name', 100)->nullable()->default('');
            $table->string('pkg_catogery', 100)->nullable()->default('');
            $table->integer('spotlights')->nullable()->default(0);
            $table->integer('lovenotes')->nullable()->default(0);
            $table->dateTime('staring')->nullable();
            $table->dateTime('ending')->nullable();
            $table->integer('status')->nullable()->default(0)->comment("0 pending , 1 active , 2 cancel");
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
        Schema::dropIfExists('user_subscriptions');
    }
}
