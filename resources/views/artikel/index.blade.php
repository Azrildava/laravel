
@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col" style="width: 5rem;">
                <div class="card">
                    <img width="400" height="550" src="{{ $artikel->foto}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><b>{{ $artikel->judul }}</b></p>
                        <p>Kategori : <a href="{{url('artikel/kategori/'. $artikel->kategori) }}">{{ $artikel->kategori }}</a></p>
                        <p>{{ $artikel->konten }}</p>
                        <p>Penulis : {{ $artikel->penulis }}</p>
                    </div>
                </div>
            </div>
        </div>
        <a type="button" class="btn btn-outline-secondary mt-5" href="{{url('/artikel')}}">Kembali ke halaman semula</a>
    </div>
@endsection
