@extends('layouts.app')

@section('content')
<div id="post-index" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

              @auth

              <a class="btn btn-danger" href="{{ route('post.create') }}">CREATE POST</a>

              @endauth

                <ul>
                  @foreach ($posts as $post)
                    <li class="post" data-post = "{{ $post ->id }}">

                      <ul class="post-box">

                        <li class="icon">
                          <a href="{{ route ('post.show', $post -> id) }}">
                              <i class="fas fa-teeth-open"></i>

                          </a>
                        </li>

                        <li class="text">
                                      TITOLO: {{ $post-> title}}  </li>

                        <li>          GENERE: {{ $post-> genre}}  </li>

                      </ul>
                    </li>


                  @endforeach
                </ul>
        </div>
    </div>
</div>
@endsection
