<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    
    use SoftDeletes;
    // //
    // protected $table = 'posts';
    
    // protected $primaryKey = 'post_id';
    
    protected $dates = ['deleted_at'];
    
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent create method, without adding the below, you are unable to
    | insert posts in database using create method.
    |-----------------------------------------------------------------------
    */
    protected $fillable = [
        'title',
        'content'
        
        ];


/*
|-------------------------------------------------------------------------------
| Laravel Fundamentals - Database - Eloquent Relationships
|-------------------------------------------------------------------------------
*/
    /*
    |-----------------------------------------------------------------------
    | The Inverse Relationship
    |-----------------------------------------------------------------------
    */
    
    public function user() {
        
        return $this->belongsTo('App\User');
        
    }
    
    
    /*
    |-----------------------------------------------------------------------
    | Polymorphic Relation part 1 & 2
    |-----------------------------------------------------------------------
    */
    
    public function photos() {
        
        return $this->morphMany('App\Photo', 'imageable');
        
    }
    
}
