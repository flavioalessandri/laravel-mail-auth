@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">



  <form class="col-md-8" action="{{route('post.update' , $post -> id )}}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="title">Title: </label>
      <input type="text" name="title" value=" {{ $post-> title }} ">
    </div>

    <div class="form-group">
      <label for="genre">Genre: </label>
      <input type="text" name="genre" value=" {{ $post-> genre }} ">
    </div>

    <div class="form-group">
      <label for="body">Body: </label>
      <textarea name="body" rows="8" cols="80"  >{{ $post-> body }} </textarea>

    <div class="form-group">
      <label for="like">Like: </label>
      <input type="text" name="like" value=" {{ $post-> like }} ">
    </div>

    <div class="form-group">
      <label for="dislike">Dislike: </label>
      <input type="text" name="dislike" value=" {{ $post-> dislike }} ">
    </div>

    <button type="submit" name="button">UPDATE</button>

  </form>


</div>

@endsection
