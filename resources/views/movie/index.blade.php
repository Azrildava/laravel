@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$movie->cover_url}}" class="card-img-top" alt="..." width="200px" height="150px">
                        <div class="card-body">
                            <a href="movie/{{$movie->id}}">{{$movie->title}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
