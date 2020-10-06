@extends('layouts.app')

@section('content')

  <div class="col-md-8">
    <ul>
      <li>{{ $post-> id }} </ li>
      <li>{{ $post-> title }}</li>
      <li>{{ $post-> genre }}</li>
      <li>{{ $post-> body }} </li>
      <li>{{ $post-> like }} </li>
    </ul>
    @auth


    <div class="">
      <a class="btn btn-danger" href="{{ route ('post.delete', $post->id) }}">DELETE</a>
      <a class="btn btn-danger" href="#">EDIT</a>

    </div>

  @endauth
  </div>

@endsection
