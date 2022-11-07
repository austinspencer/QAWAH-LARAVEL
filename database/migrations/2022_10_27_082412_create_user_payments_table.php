<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_payments', function (Blueprint $table){
            $table->id();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('pkg_id')->nullable()->default(0);
            $table->string('payment_id',100)->nullable();
            $table->string('currency',100)->nullable();
            $table->string('amount',100)->nullable();
            $table->string('payment_status',100)->nullable();
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
        Schema::dropIfExists('user_payments');
    }
}
