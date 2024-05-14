@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
           @foreach ($artikel as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img width="350" height="250" src="{{ $item->foto }}" class="card-img-top" alt="..." >
                            <div class="card-body">
                                <p class="card-text">{{ $item->judul }}.</p>
                                <p class="card-text">{{$item->penulis}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('artikel/'. $item->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection