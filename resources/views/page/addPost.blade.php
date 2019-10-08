@extends('layout.post-layout')
@section('content')
<a href="{{route('pressIndex')}}">BACK</a>
<div class="box">
  <form class="" action="{{route('pressStorePost')}}" method="post">
    @csrf
    @method('POST')
    <div class="">
      <label for="title">title</label>
      <input type="text" name="title" value="">
    </div>
    <div class="">
      <label for="author">author</label>
      <input type="text" name="author" value="">
    </div>
    <div class="">
      <label for="content">content</label>
      <input type="text" name="content" value="">
    </div>
    <div class="">
      <label for="category">category</label>
      <select class="" name="category_id">
        <?php foreach ($categories as $category): ?>
          <option value="{{$category -> id}}">{{$category-> name}}</option>
        <?php endforeach; ?>

      </select>
    </div>
    <button type="submit" name="button">CREATE</button>
  </form>
</div>
@endsection
