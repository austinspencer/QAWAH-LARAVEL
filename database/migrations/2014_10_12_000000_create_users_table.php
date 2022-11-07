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
            
            
            //step 1 columns
            $table->increments('id');
            $table->string('profileName')->nullable();
            $table->string('governmentName')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->date('birthday')->nullable();
            $table->json('height')->nullable();
            $table->string('iAm')->nullable();
            $table->string('seeking');
            $table->string('zipcode');
            // foreign realationsip location

           //step 2 columns
            $table->text('aboutMe')->nullable();
            $table->string('bodyType')->nullable();
            $table->string('doYouDrink')->nullable();
            $table->string('doYouHaveChildren')->nullable();
            $table->string('doYouSmoke')->nullable();
            $table->string('doYouWantMoreChildren')->nullable();
            $table->string('employmentStatus')->nullable();
            $table->string('havePets')->nullable();
            $table->string('havePetsOthers')->nullable();
            $table->string('howOftenDoYouExercise')->nullable();
            $table->string('livingSituation')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('relationshipIAmSeeking')->nullable();
            $table->string('willingToRelocate')->nullable();
            // foreign relationship  gallery Images
            // foreign relationship  profile Images
            
            
            
            //step 3 columns
            $table->string('anyAffiliation')->nullable();
            $table->string('iBelieveIAM')->nullable();
            $table->string('maritalBeliefSystem')->nullable();
            $table->string('spiritualBackground')->nullable();
            $table->string('spiritualValue')->nullable();
            $table->string('studyBible')->nullable();
            $table->string('studyHabits')->nullable();
            $table->string('yearsInTruth')->nullable();
            // foreign relationship  selectedPassions 
            // foreign relationship  selectedkingdomGiftsTags 
            // foreign relationship  isrealitePracticeKeeping 
            
            

            $table->boolean('mobile_verified')->default(0.);
            $table->boolean('email_verified')->default(0);
            $table->boolean('active')->default(1);
            $table->timestamp('email_verified_at')->nullable();
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
