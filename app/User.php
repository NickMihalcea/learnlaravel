<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
/*
|-------------------------------------------------------------------------------
| Laravel Fundamentals - Database - Eloquent Relationships
|-------------------------------------------------------------------------------
*/
    /*
    |-----------------------------------------------------------------------
    | One to One Relationship
    |-----------------------------------------------------------------------
    */
    
    public function post() {
        
        return $this->hasOne('App\Post');
        
    }
    
    /*
    |-----------------------------------------------------------------------
    | One to many Relationship
    |-----------------------------------------------------------------------
    */
    
    public function posts() {
        
        return $this->hasMany('App\Post');
    }
    
    /*
    |-----------------------------------------------------------------------
    | Many to many Relationship / Querying Intermediate Table
    |-----------------------------------------------------------------------
    */
    
    public function roles() {
        
        return $this->belongsToMany('App\Role')->withPivot('created_at');
        
        // To customise table name and columns follow the format below
        // return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
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
