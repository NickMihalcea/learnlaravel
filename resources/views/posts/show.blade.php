@extends('layouts.app')

@section('content')
<!--Show individual posts title and content based on ID-->
<h1>Title:<a href="{{route('posts.edit', $post->id)}}"> {{$post->title}}</a></h1>
<h3>Content: {{$post->content}}</h3>
@endsection
@yield('footer')