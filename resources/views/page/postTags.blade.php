@extends('layout.post-layout')
@section('content')
<a href="{{route('pressIndex')}}">BACK</a>
<h1>Post</h1>
<div class="box">
  <p>Title: {{$post->  title}}</p>
  <p>Author: {{$post->  author}}</p>
  <p>Content: {!!$post->  content!!}</p>
  <h5>Category: {{$post-> category -> name}}</h5>
</div>
<h1>Tags</h1>
<?php foreach ($post-> tags as $tag): ?>
  <div class="box">
    <p>Author: {{$tag-> author}}</p>
    <p>Description: {{$tag-> desc}}</p>
  </div>
<?php endforeach; ?>

@endsection
