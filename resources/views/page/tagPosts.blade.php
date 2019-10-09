@extends('layout.post-layout')
@section('content')
<a href="{{route('pressIndex')}}">BACK</a>
<h1>Tag</h1>
<div class="box">
  <p>Title: {{$tag->  author}}</p>
  <p>Author: {{$tag->  desc}}</p>

</div>
<h1>Posts</h1>
<?php foreach ($tag-> posts as $post): ?>
  <div class="box">
    <p>Title: {{$post-> title}}</p>
    <p>Author: {{$post-> author}}</p>
    <p>Content: {!!$post->  content!!}</p>
    <h5>Category: {{$post-> category -> name}}</h5>
  </div>
<?php endforeach; ?>

@endsection
