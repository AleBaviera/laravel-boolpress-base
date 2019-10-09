@extends('layout.post-layout')
@section('content')



<?php foreach ($tags as $tag): ?>

  <div class="box">
    <p>Author: {{$tag-> author}}</p>
    <p>Description: {{$tag-> desc}}</p>

    <a href="{{route('pressPostsTag', $tag-> id)}}"><h3>VIEW TAG'S POSTS</h3>
    </a>
  </div>
<?php endforeach; ?>
@endsection
