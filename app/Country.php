<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
/*
|-------------------------------------------------------------------------------
| Laravel Fundamentals - Database - Eloquent Relationships
|-------------------------------------------------------------------------------
*/

    /*
    |-----------------------------------------------------------------------
    | Has many through relation part 1 & 2
    |-----------------------------------------------------------------------
    */
    
    public function posts() {
        
        return $this->hasManyThrough('App\Post', 'App\User');
        
    }
}
