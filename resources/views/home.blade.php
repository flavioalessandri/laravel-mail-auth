@extends('layouts.app')

@section('content')
<div id="home" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                      <h2><a  href="{{ route ('posts.index') }}">
                            READ OUR POSTS!
                          </a>
                      </h2>

                </div>
                <div class="card-body centered d-flex justify-content-center">

                    <a class="typewriter" href="{{ route ('posts.index') }}">

                      <img src="{{asset('/img/typewriter.jpg')}}" alt="typewriter">

                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
