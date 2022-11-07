<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{     
    protected $table = "packages";
    public $fillable = array('title','price','catogery_id','description', 'duration' , 'spotlights' , 'lovenotes', 'options','active');

    public function packages_categery()
    {
        return $this->hasOne(Packages_catogeries::class, 'id','catogery_id');
    }
     public function packages_categeries()
    {
        return $this->hasMany(Packages_catogeries::class, 'id','catogery_id');
    }
}
