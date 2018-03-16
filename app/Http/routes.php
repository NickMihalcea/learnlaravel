<?php
use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Tag;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "This is the about page";
// });

// Route::get('/contact', function () {
//     return "This is the contact page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number ". $id . " " . $name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home', function() {
//     $url = route('admin.home');
    
//     return "this url is ". $url;
// }));

// Route::get('/post/{id}', 'PostsController@index');


// Route::resource('posts', 'PostsController');

// Route::get('/contact', 'PostsController@contact');



// Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

/*
|-------------------------------------------------------------------------------
| Application Routes
|-------------------------------------------------------------------------------
*/



/*
|-------------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|-------------------------------------------------------------------------------
*/

    /*
    |-----------------------------------------------------------------------
    | Inserting data in database
    |-----------------------------------------------------------------------
    */
    // Route::get('/insert', function(){
    
    //     DB::insert('insert into posts(title,content) values(?, ?)', ['Laravel is awesome', 'Laravel is the best thing that has happend to PHP, PERIOD']);
    
    // });
    
    
    /*
    |-----------------------------------------------------------------------
    | Reading data from database
    |-----------------------------------------------------------------------
    */
    // Route::get('/read', function() {
    
        
    //     //Reading inserted data from database
    //     $results = DB::select('select * from posts where id = ?', [1]);
        
    //     return var_dump($results);
        
    //     // foreach($results as $post) {
    //     //     return $post->title;
    //     // }
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Updating entry in database
    |-----------------------------------------------------------------------
    */
    // Route::get('/update', function() {
        
    //     $updated = DB::update('update posts set title = "Updated title" where id = ?', [2]);
        
    //     return $updated;
        
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Deleting data from database
    |-----------------------------------------------------------------------
    */
    
    // Route::get('/delete', function() {
        
    //   $deleted = DB::delete('delete from posts where id = ?', [1]);
        
    //     return $deleted;
    // });
    
    
    
/*
|-------------------------------------------------------------------------------
| Database - Eloquent / ORM
|-------------------------------------------------------------------------------
*/

    /*
    |-----------------------------------------------------------------------
    | Read posts
    |-----------------------------------------------------------------------
    */
    // Route::get('/read', function() {
        
    //     $posts = Post::all();
        
    //     foreach($posts as $post) {
            
    //         return $post->title;
    //     }
        
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Find Posts
    |-----------------------------------------------------------------------
    */
    // Route::get('/find', function($id) {
        
    //     $post = Post::find(2); //argument provided is id of the post
        
    //     return $post->title;
        
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Another way to find posts
    |-----------------------------------------------------------------------
    */
    // Route::get('/findwhere', function() {
        
    //     $posts = Post::where('id', 4)->orderBy('id', 'desc')->take(1)->get();
        
    //     return $posts;
        
    // });
    
    /*
    |-----------------------------------------------------------------------
    | No ideea what this was for since we never returned anything and
    | we had no column for users_count in $table->posts;
    |-----------------------------------------------------------------------
    */
    // Route::get('/findmore', function() {
        
    //     // $posts = Post::findOrFail(1);
        
    //     // return $posts;
        
    //     $posts = Post::where('users_count', '<', 50)->firstOrFail();
        
    // });


    /*
    |-----------------------------------------------------------------------
    | Another way of inserting posts in database
    |-----------------------------------------------------------------------
    */
    
    // Route::get('/basicinsert', function() {
       
    //   $post = new Post;
       
    //   $post->title = 'New Eloquent title insert';
    //   $post->content = 'New eloquent content to post';
    //   $post->save();
        
    // });
    
    
    /*
    |-----------------------------------------------------------------------
    | Another way of updating posts in database
    |-----------------------------------------------------------------------
    */
    
    // Route::get('/basicinsert2', function() {
       
    //   $post = Post::find(2);//argument provided is id of the post
       
    //   $post->title = 'New Eloquent title insert 2';
    //   $post->content = 'New eloquent content to post 2';
    //   $post->save();
        
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent create method
    |-----------------------------------------------------------------------
    */
    // Route::get('/create', function() {
        
    //     Post::create(['title'=>'the create method', 'content'=>'This is the content of the create method']);
        
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent update method
    |-----------------------------------------------------------------------
    */
    // Route::get('/update', function() {
        
    //     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>"New Eloquent update title", 'content'=>'New Eloquent updated content']);
        
        
    // });
    
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent delete method
    |-----------------------------------------------------------------------
    */
    // Route::get('/delete', function() {
        
    //     $post = Post::find(2); //argument provided is id of the post
        
    //     $post->delete();
        
        
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent destroy method
    |-----------------------------------------------------------------------
    */
    // Route::get('/delete2', function() {
        
    //     Post::destroy([4,5]);
        
    //     // Post::where('is_admin', 0)->delete();        
    // });
    
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent Soft Delete method
    |-----------------------------------------------------------------------
    */
    // Route::get('/softdelete', function() {
        
    //     Post::find(2)->delete();
              
    // });
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent Retrieving deleted / trashed records
    |-----------------------------------------------------------------------
    */
    
    // Route::get('/readsoftdelete', function() {
        
    //using the method below will not display the post    
    //   $post = Post::find(1);
       
    //   return $post;
    
    //using the method below will display the post object.
    // $post = Post::onlyTrashed()->where('is_admin', 0)->get();
    
    // return $post;
        
    // });
    
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent Retrieving deleted / trashed records
    |-----------------------------------------------------------------------
    */
    
    // Route::get('/restore', function() {
        
    //     Post::withTrashed()->where('is_admin', 0)->restore();
        
    // });
    
    
    /*
    |-----------------------------------------------------------------------
    | Eloquent Deleting a record permanently, lucky enough i knew something
    | was wrong with this query and it will delete all posts since the
    | condition is where is not admin, which makes all posts meet it...
    | Good thing i didn't run it and wait for the instructor to notice he
    | just deleted all data from his table...which would suck really bad in
    | a production environment...
    | Function fixed and below is correct to delete only trashed posts !
    |-----------------------------------------------------------------------
    */
    
    // Route::get('/forcedelete', function() {
        
    //     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
        
    // });
    

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
    
    // Route::get('/user/{id}/post', function($id) {
        
    // return User::find($id)->post->content;
    
    // });
    
    /*
    |-----------------------------------------------------------------------
    | The inverse Relationship
    |-----------------------------------------------------------------------
    */
    
    // Route::get('/post/{id}/user', function($id) {
        
    //     return Post::find($id)->user->name;
        
    // });
    
    
    /*
    |-----------------------------------------------------------------------
    | One to many Relationship
    |-----------------------------------------------------------------------
    */
    
    Route::get('/posts', function() {
        
        $user = User::find(1);
        
        foreach ($user->posts as $post) {
            
            echo $post->title . "<br>";
        }
        
    });
    
    /*
    |-----------------------------------------------------------------------
    | Many to many Relationship
    |-----------------------------------------------------------------------
    */
    
    Route::get('/user/{id}/role', function($id) {
        
        $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
        
        return $user;
        
        
        foreach($user->roles as $role) {
            
            return $role->name;
        }
    });
    
    
    /*
    |-----------------------------------------------------------------------
    | Many to many Relationship / Accessing the intermediate table / pivot
    |-----------------------------------------------------------------------
    */
    
    Route::get('user/pivot', function() {
        
        $user = User::find(1);
        
        foreach($user->roles as $role) {
            
            return $role->pivot->created_at;
            
        }
        
    });
    
    
    /*
    |-----------------------------------------------------------------------
    | Has many through relation part 1 & 2
    |-----------------------------------------------------------------------
    */
    
    Route::get('/user/country', function() {
        
        $country = Country::find(3);
        
        foreach($country->posts as $post) {
            
            return $post->title;
        }
    });
    
    /*
    |-----------------------------------------------------------------------
    | Polymorphic relation part 1 & 2
    |-----------------------------------------------------------------------
    */
    // get the photo for user
    Route::get('user/photos', function() {
        
        $user = User::find(1);
        
        foreach($user->photos as $photo) {
            
            return $photo->path;
            
        }
        
    });  
    
    // get the photo for post
    Route::get('post/{id}/photos', function($id) {
        
        $post = Post::find($id);
        
        foreach($post->photos as $photo) {
            
            echo $photo->path . "<br>";
            
        }
        
    });
    

    /*
    |-----------------------------------------------------------------------
    | Polymorphic inverse relation - Section 11 / Lecture 73
    |-----------------------------------------------------------------------
    */
    
    Route::get('photo/{id}/post', function($id) {
        
      $photo = Photo::findOrFail($id);
      
      return $photo->imageable;
    });
    
    
    /*
    |-----------------------------------------------------------------------
    | Polymorphic relation many to many / retrieving
    |-----------------------------------------------------------------------
    */
    
    Route::get('/post/tag', function() {
        
        $post = Post::find(1);
        
        foreach($post->tags as $tag) {
            
            echo $tag->name;
            
        }
        
    });
    
    /*
    |-----------------------------------------------------------------------
    | Polymorphic relation many to many / retrieving owner
    |-----------------------------------------------------------------------
    */
    
    Route::get('/tag/post', function() {
        
        $tag = Tag::find(2);
        
        //return $tag->posts;
        foreach($tag->posts as $post)
        {
            return $post->title;
        }
        
    });