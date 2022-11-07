<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_payments extends Model
{
    //
    protected $table = "user_payments";
    protected $fillable = [
        'id', 'user_id','pkg_id','payment_id','currency','amount','payment_status',
    ];
}
