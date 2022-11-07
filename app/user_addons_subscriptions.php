<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_addons_subscriptions extends Model
{
    //
    protected $table = "user_addons_subscriptions";
    protected $fillable = [
        'id','subscribe_id','addon_name', 'status',
    ];

    /**
     * Get all of the comments for the user_addons_subscriptions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Get the user that owns the user_addons_subscriptions
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscriptions()
    {
        return $this->belongsTo(Users_subcribtion::class, 'subscribe_id	', 'id');
    }
}
