<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens , Notifiable;
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
    protected $fillable = [
        'id', 'profileName', 'governmentName', 'phone', 'email', 'password', 'birthday', 'height', 'iAm', 'seeking', 'zipcode', 'aboutMe', 'bodyType', 'doYouDrink', 'doYouHaveChildren', 'doYouSmoke', 'doYouWantMoreChildren', 'employmentStatus', 'havePets', 'havePetsOthers', 'howOftenDoYouExercise', 'livingSituation', 'maritalStatus', 'relationshipIAmSeeking', 'willingToRelocate', 'anyAffiliation', 'iBelieveIAM', 'maritalBeliefSystem', 'spiritualBackground', 'spiritualValue', 'studyBible', 'studyHabits', 'yearsInTruth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */ 
    public function Location()
    {
        return $this->hasOne(Users_Location::class, 'user_id', 'id');
    }
 
    public function gallery_images()
    {
        return $this->hasMany(Users_Gallery_Images::class, 'user_id');
    }
 
    public function profile_images()
    {
        return $this->hasMany(Users_Profile_Images::class, 'user_id');
    }

    public function isrealitePracticeKeeping()
    {
        return $this->hasMany(Users_israelites_practice::class, 'user_id');
    }
    public function kingdomGifts()
    {
        return $this->hasMany(Users_kingdom_gifts::class, 'user_id');
    }
    public function passions()
    {
        return $this->hasMany(Users_passions::class, 'user_id');
    }
    public function subscription()
    {
        return $this->hasMany(Users_subcribtion::class,'user_id')->with('user_addons_subscriptions');
    }
    public function user_subcribtion()
    {
        return $this->hasOne(Users_subcribtion::class, 'user_id');
    }
    public function User_payments()
    {
        return $this->hasOne(User_payments::class, 'user_id');
    }
    public function useractions_by_auth_user()
    {
        return $this->hasOne(UserAction::class, 'user_id');
    }
    public function useractions()
    {
        return $this->hasOne(UserAction::class, 'match_id');
    }
    public function user_match()
    {
        return $this->hasOne(user_matched::class, 'user_id');
    }
    public function varrification_code()        
    {
        return $this->hasOne(users_verification_codes::class, 'user_id');
    }
}
