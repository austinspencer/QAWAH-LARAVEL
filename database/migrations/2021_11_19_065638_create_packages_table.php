<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->integer('catogery_id')->unsigned()->nullable()->default(0);
            $table->integer('duration')->unsigned()->nullable()->default(0);
            $table->integer('spotlights')->unsigned()->nullable()->default(0);
            $table->integer('lovenotes')->unsigned()->nullable()->default(0);
            $table->text('description')->nullable()->default('text');
            $table->string('options')->nullable();
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('packages');
    }
}
