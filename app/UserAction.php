<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAction extends Model
{
    //
    protected $table = "user_actions";
    protected $guarded = [
        "id"
    ];
    public function who_like_me_users()
    {
        return $this->hasone(User::class,'id','user_id');
    }
}
