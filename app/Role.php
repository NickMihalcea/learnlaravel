<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

/*
|-------------------------------------------------------------------------------
| Laravel Fundamentals - Database - Eloquent Relationships
|-------------------------------------------------------------------------------
*/

    /*
    |-----------------------------------------------------------------------
    | One to many Relationship
    |-----------------------------------------------------------------------
    */
    
    public function users() {
        
        return $this->belongsToMany('App\User');
        
    }
    

}
