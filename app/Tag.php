<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
/*
|-------------------------------------------------------------------------------
| Laravel Fundamentals - Database - Eloquent Relationships
|-------------------------------------------------------------------------------
*/

    /*
    |-----------------------------------------------------------------------
    | Polymorphic relation many to many part 1 & 2
    |-----------------------------------------------------------------------
    */
    
    public function posts() {
        
        return $this->morphedByMany('App\Post', 'taggable');
        
    }
    
    public function videos() {
        
        return $this->morphedByMany('App\Video', 'taggable');
        
    }
    
}
