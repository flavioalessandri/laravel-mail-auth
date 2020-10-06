@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <ul>
                  @foreach ($posts as $post)
                    <li>

                      <ul>
                        <li>  <a href="{{ route ('post.show', $post -> id) }}">TITOLO: {{ $post-> title}}</a></li>
                        <li>GENERE: {{ $post-> genre}}</li>

                      </ul>
                    </li>
                    <br>

                  @endforeach
                </ul>
        </div>
    </div>
</div>
@endsection
