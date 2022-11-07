<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Profile_Images extends Model
{
    //
    protected $table = "users_profile_images";
    protected $fillable = [
     'id','url','user_id',
    ];
    

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
