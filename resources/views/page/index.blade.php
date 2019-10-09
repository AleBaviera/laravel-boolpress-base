@extends('layout.post-layout')
@section('content')

<a href="{{route('pressCreatePost')}}">ADD POST</a>

<a href="{{route('pressShowTags')}}">SHOW ALL TAGS</a>

<?php foreach ($posts as $post): ?>
<div class="box">
  <p>Title: {{$post-> title}}</p>
  <p>Author: {{$post-> author}}</p>
  <p>Content: {!!$post-> content!!}</p>

  <a href="{{route('pressShowPost', $post -> id)}}">SHOW POST</a>
  <a href="{{route('pressTagsPost', $post -> id)}}">SHOW TAGS</a>

  <a href="{{route('pressShowPostsByCategory', $post -> category_id)}}">
    <h5>Category: {{$post-> category -> name}}</h5>
  </a>

  <a href="{{route('pressEditPost', $post -> id)}}">UPDATE POST</a>
  <a href="{{route('pressDeletePost', $post -> id)}}">DELETE POST</a>

</div>
<?php endforeach; ?>
@endsection
