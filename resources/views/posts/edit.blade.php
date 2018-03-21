@extends('layouts.app')



@section('content')
<!--Edit Post Form-->
<h1>Edit Post</h1>
<form method="post" action="/posts/{{$post->id}}">
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
    {{csrf_field()}}
    <input type="submit" name="submit" value="UPDATE">
</form>

<!--Delete Post Form-->
<form method="post" action="/posts/{{$post->id}}">
    <input type="hidden" name="_method" value="DELETE">
    {{csrf_field()}}
    <input type="submit" value="DELETE">
</form>
@endsection