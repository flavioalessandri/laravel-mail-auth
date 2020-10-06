@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body centered d-flex justify-content-center">

                    <a class="btn btn-primary" href="{{ route ('posts.index') }}">

                        GO TO OUR POSTS

                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
