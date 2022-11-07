<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_kingdom_gifts extends Model
{
    //
    protected $table = "users_kingdom_gifts";
    protected $fillable = [
        'id', 'user_id', 'options',
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
