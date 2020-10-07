@extends('mail.layouts.mail-layout')

@section('content')

  <h2><span class="red"> Mail: </span> {{$user -> email}} </h2>
  <h3><span class="red"> Name: </span> {{ $user -> name }}</h3>

  <h3><span class="red"> Action: </span> {{ $action}}</h2></h3>


    <ul>
      <li><span>TITLE: </span>
        {{ $post-> title }}</li>

      <li> <span>GENRE:</span>
        {{ $post-> genre }}</li>

      <li><span>BODY:</span>
        {{ $post-> body }} </li>

      <li><span>Like:</span>
        {{ $post-> like }} </li>

      <li><span>Dislike:</span>
        {{ $post-> dislike }} </li>

    </ul>


@endsection
