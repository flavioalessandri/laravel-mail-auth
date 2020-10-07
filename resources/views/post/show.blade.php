@extends('layouts.app')

@section('content')

  <div class="col-md-8">
    <ul>
      <li> ID: {{ $post-> id }} </li>
      <li>Title: {{ $post-> title }}</li>
      <li>Genre: {{ $post-> genre }}</li>
      <li>Body: {{ $post-> body }} </li>
      <li>Like: {{ $post-> like }} </li>
      <li>DisLike: {{ $post-> dislike }} </li>
    </ul>



    @auth


    <div class="">
      <a class="btn btn-danger" href="{{ route ('post.delete', $post->id) }}">DELETE</a>
      <a class="btn btn-danger" href="{{ route ('post.edit', $post->id) }}">EDIT</a>

    </div>

  @else

    <h4>Please ensure to   <a href=" {{ route('login') }} "> LOGIN </a> in order to modify this Post</h4>

  @endauth

  </div>

@endsection
