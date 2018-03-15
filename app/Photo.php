<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
/*
|-------------------------------------------------------------------------------
| Laravel Fundamentals - Database - Eloquent Relationships
|-------------------------------------------------------------------------------
*/

    /*
    |-----------------------------------------------------------------------
    | Polymorphic Relation part 1 & 2
    |-----------------------------------------------------------------------
    */
    
    public function imageable() {
        
        return $this->morphTo();
    }
}
