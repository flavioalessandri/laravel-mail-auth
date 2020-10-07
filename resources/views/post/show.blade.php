@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">

  <div id="post-show" class="col-md-8">
    <ul>
      <li> <strong>ID:</strong> {{ $post-> id }} </li>
      <li> <strong>Title:</strong> {{ $post-> title }}</li>
      <li> <strong>Genre:</strong> {{ $post-> genre }}</li>
      <li> <strong>Body:</strong> {{ $post-> body }} </li>

      <li> <i class="far fa-thumbs-up"></i>
                    <strong>Like: </strong>
                   {{ $post-> like }} </li>

      <li>   <i class="far fa-thumbs-down"></i>
                <strong>DisLike: </strong>
                 {{ $post-> dislike }} </li>
    </ul>



    @auth


    <div class="buttons">
      <a class="btn btn-danger" href="{{ route ('post.delete', $post->id) }}">DELETE</a>
      <a class="btn btn-primary" href="{{ route ('post.edit', $post->id) }}">EDIT</a>
    </div>

  @else

    <h4>Please ensure to   <a href=" {{ route('login') }} "> LOGIN </a> in order to modify this Post</h4>

  @endauth

  </div>
</div>
@endsection
