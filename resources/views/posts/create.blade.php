@extends('layouts.app')



@section('content')
<!--Create Post Form. this form only adds a title, but it can be extended to add content as well-->
<h1>Create Post</h1>
<form method="post" action="/posts">
    <input type="text" name="title" placeholder="Enter title">
    <!--If you want content added, uncomment the below input-->
    <!--<textarea name="content" placeholder="Enter post contennt"></textarea>-->
    {{csrf_field()}}
    <input type="submit" name="submit">
</form>
@endsection