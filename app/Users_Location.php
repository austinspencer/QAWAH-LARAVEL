<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Location extends Model
{
    //
    protected $table = "users_location";
    protected $fillable = [
       'id', 'user_id', 'city', 'latitude', 'longitude', 'state', 'state_abbr', 'zipcode'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
