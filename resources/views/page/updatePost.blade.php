@extends('layout.post-layout')
@section('content')
<a href="{{route('pressIndex')}}">BACK</a>
<div class="box">
  <form class="" action="{{route('pressUpdatePost', $post-> id)}}" method="post">
    @csrf
    @method('POST')
    <div class="">
      <label for="title">title</label>
      <input type="text" name="title" value="{{$post-> title}}">
    </div>
    <div class="">
      <label for="author">author</label>
      <input type="text" name="author" value="{{$post-> author}}">
    </div>
    <div class="">
      <label for="content">content</label>
      <input type="text" name="content" value="{!! html_entity_decode($post-> content) !!}">
    </div>

    <button type="submit" name="button">UPDATE</button>
  </form>
</div>
@endsection
