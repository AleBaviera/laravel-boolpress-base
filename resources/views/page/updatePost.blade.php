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
      <input type="text" name="content" value="{{$post-> content }}">
    </div>
    <div class="">
      <label for="category">category</label>
      <select class="" name="category_id">
        <?php foreach ($categories as $category): ?>
          <option value="{{$category -> id}}">{{$category-> name}}</option>
        <?php endforeach; ?>

      </select>
    </div>

    <button type="submit" name="button">UPDATE</button>
  </form>
</div>
@endsection
