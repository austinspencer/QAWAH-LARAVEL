<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddonsSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addons_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('subscribe_id')->unsigned()->nullable();
            $table->string('addon_name', 100)->nullable()->default('text');
            $table->boolean('status')->nullable()->default(0);
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
        Schema::dropIfExists('user_addons_subscriptions');
    }
}
