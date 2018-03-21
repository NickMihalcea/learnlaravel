@extends('layouts.app')

@section('content')
<!--Showing all posts titles as a list-->
    <ul>
        @foreach($posts as $post)
        
            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>       
            
        @endforeach
    </ul>
@endsection
@yield('footer')