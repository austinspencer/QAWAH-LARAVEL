<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_passions extends Model
{
    //
    protected $table = "users_passions";
    protected $fillable = [
        'id', 'user_id', 'options',
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
