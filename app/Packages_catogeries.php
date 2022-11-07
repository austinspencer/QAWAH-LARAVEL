<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages_catogeries extends Model
{
    //
    protected $table =  "packages_catogeries"; 
    protected $fillable = [
        'id','title','slug'
    ];

    /**
     * Get the user associated with the Packages_catogeries
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    /**
     * Get the package_catogery that owns the Packages_catogeries
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * Get the user that owns the Packages_catogeries
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function packages()
    {
         return $this->hasmany(Package::class,'catogery_id','id');
        //return $this->belongsToMany (Package::class,'packages','id','catogery_id');
    } 

    /**
     * The roles that belong to the Packages_catogeries
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    // public function roles(): BelongsToMany
    // {
    //     return $this->belongsToMany(Role::class, 'role_user_table', 'user_id', 'role_id');
    // }
    
}
