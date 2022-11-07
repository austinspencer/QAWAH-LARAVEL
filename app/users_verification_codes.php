<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_verification_codes extends Model
{
      //
      protected $table = "users_verification_codes";
      protected $fillable = [
        'id', 'user_id', 'code', 'type','status'
      ];
      public function User()
      {
          return $this->belongsTo(User::class, 'user_id'); 
      }
}
