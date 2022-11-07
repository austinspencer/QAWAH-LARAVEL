<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_israelites_practice extends Model
{
    //
    protected $table = "users_israelites_practice";
    protected $fillable = [
        'id', 'user_id', 'options',
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
