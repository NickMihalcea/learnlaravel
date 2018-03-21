<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*
|-------------------------------------------------------------------------------
| Laravel Fundamentals - Crud Application / Forms & Validation
|-------------------------------------------------------------------------------
*/
    public function index()
    {
        /*
        |-----------------------------------------------------------------------
        | Laravel Fundamentals - Crud Application / Forms & Validation
        | Controller showing all posts in index blade.
        |-----------------------------------------------------------------------
        */
        $posts = Post::all();
        return view('posts.index', compact('posts'));
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        |-----------------------------------------------------------------------
        | Laravel Fundamentals - Crud Application / Forms & Validation
        | Controller returning create posts form.
        |-----------------------------------------------------------------------
        */
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        |-----------------------------------------------------------------------
        | Laravel Fundamentals - Crud Application / Forms & Validation
        | Controller handling the create request and redirecting to index.
        |-----------------------------------------------------------------------
        */
        
        // return $request->all();
        // $input = $request->all();
        // $input['title'] = $request->title;
        
        // $post = new Post;
        // $post->title = $request->title;
        // $post->save();
        
        Post::create($request->all());
        
        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        |-----------------------------------------------------------------------
        | Laravel Fundamentals - Crud Application / Forms & Validation
        | Controller handling the individual post page based on $id
        |-----------------------------------------------------------------------
        */
        $post = Post::findOrFail($id);
        
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*
        |-----------------------------------------------------------------------
        | Laravel Fundamentals - Crud Application / Forms & Validation
        | Controller returning edit/delete posts form.
        |-----------------------------------------------------------------------
        */
        $post = Post::findOrFail($id);
        
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        |-----------------------------------------------------------------------
        | Laravel Fundamentals - Crud Application / Forms & Validation
        | Controller handling update method sent through edit form and
        | redirecting to posts index page.
        |-----------------------------------------------------------------------
        */
        $post = Post::findOrFail($id);
        
        $post->update($request->all());
        
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
        |-----------------------------------------------------------------------
        | Laravel Fundamentals - Crud Application / Forms & Validation
        | Controller handling delete method sent through the edit form of posts.
        |-----------------------------------------------------------------------
        */
        $post = Post::whereId($id)->delete();
        return redirect('/posts');
    }
    
    //showing a contact list
    public function contact() {
        // $people = ['Nick', 'Kriogen', 'Laravel', 'PHP'];
        $people = ['test'];
        return view('contact', compact('people'));
        
        
    }
    
    // some other function to show info based on $id, $name & $password
    public function show_post($id, $name, $password) {
        
        // return view('post')->with('id',$id);
        return view('post', compact('id','name','password'));
    }
}
