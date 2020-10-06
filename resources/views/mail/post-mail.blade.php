@extends('mail.layouts.mail-layout')

@section('content')

  <h2>Name: {{ $user -> name }} -- Mail: {{$user -> email}} -- Action: {{ $action}}</h2>

    <ul>
      <li>TITLE: {{ $post-> title }}</li>
      <li> GENRE: {{ $post-> genre }}</li>
      <li>BODY: {{ $post-> body }} </li>
      <br>
      <li>Like: {{ $post-> like }} </li>
      <li>Dislike: {{ $post-> dislike }} </li>

    </ul>


@endsection
