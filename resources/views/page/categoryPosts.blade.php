@extends('layout.post-layout')
@section('content')
<a href="{{route('pressIndex')}}">BACK</a>
<?php foreach ($categoryPosts as $post): ?>
<div class="box">
  <p>Title: {{$post-> title}}</p>
  <p>Author: {{$post-> author}}</p>
  <p>Content: {!!$post-> content!!}</p>
  <h5>Category: {{$post-> category -> name}}</h5>
</div>
<?php endforeach; ?>
@endsection
