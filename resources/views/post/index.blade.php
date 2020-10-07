@extends('layouts.app')

@section('content')
<div id="post-index" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

              <a href="{{ route('post.create') }}">CREATE POST</a>

                <ul>
                  @foreach ($posts as $post)
                    <li class="post" data-post = "{{ $post ->id }}">

                      <ul class="post-box">

                        <li class="icon">
                          <a href="{{ route ('post.show', $post -> id) }}">
                              <i class="far fa-clipboard"></i>
                          </a>
                        </li>

                        <li class="text-primary">
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
