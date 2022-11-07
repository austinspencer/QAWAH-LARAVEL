<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_actions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('match_id')->unsigned();
            $table->boolean('disliked')->default(false);
            $table->boolean('liked')->default(false);
            $table->boolean('fancy')->default(false);
            $table->boolean('superlike')->default(false);
            $table->boolean('matched')->default(false);
            $table->boolean('is_blocked')->default(false);
            $table->boolean('report_detail_id')->default(false);
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
        Schema::dropIfExists('user_actions');
    }
}
