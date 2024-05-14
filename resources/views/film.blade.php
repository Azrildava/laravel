 {{-- @php 

    //$film = \App\Models\Film::all();
    // $singleFilm = \App\Models\Film::Find(1);
    // $detailFilm = \App\Models\DetailFilm::all();
    // $MediaFilm = \App\Models\MediaFilm::all();

@endphp

<h1 style="color :aqua">Daftar Film</h1>
@foreach ($film as $data)
<h2>Id Film : {{$data->id}}</h2>
<h2>Judul Film : {{$data->judul}}</h2>
<h2>Deskripsi Film : {{$data->deskripsi}}</h2>
<a href="{{ url('film/' .$data->id) }}">Detail Film</a>
<hr>  --}}

 {{-- <h2 style="color: blue">Detail Film</h2>
    <h4>Code Film : {{$orangTua->DetailFilm->code_film}}</h4>
    <h4>Url IMDB Film : {{$orangTua->DetailFilm->url_indb}}</h4>
    <h2 style="color: aqua">Media Film</h2> --}}

 {{-- @foreach ($orangTua->MediaFilm as $item)
        <p>Judul Media : {{ $item->media_title }}</p>
        <p>Url Media : {{ $item->url_media }}</p>
        <hr>
    @endforeach --}}

 {{-- @extends('layout.layout')
 @section('content')
     <div class="album py-5 bg-light">
         <div class="container">

             <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                 <div class="col">
                     <div class="card shadow-sm">
                         <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                             xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                             preserveAspectRatio="xMidYMid slice" focusable="false">
                             <title>Placeholder</title>
                             <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                 dy=".3em">Thumbnail</text>
                         </svg>

                         <div class="card-body">
                             <p class="card-text">This is a wider card with supporting text below as a natural
                                 lead-in to additional content. This content is a little bit longer.</p>
                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                     <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                 </div>
                                 <small class="text-muted">9 mins</small>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection --}}

 {{-- @endforeach --}}

 @extends('layout.layout')
 @section('content')
     @php
         $film = \App\Models\Film::all();
     @endphp
     <div class="album py-5 bg-light">
         <div class="container">


             <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                 @foreach ($film as $item)
                     <div class="col">
                         <div class="card shadow-sm">
                             <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false">
                                 <title>Placeholder</title>
                                 <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                     dy=".3em">{{ $item->judul }}</text>
                             </svg>

                             <div class="card-body">
                                 <p class="card-text">{{ $item->deskripsi }}</p>
                                 <div class="d-flex justify-content-between align-items-center">
                                     <div class="btn-group">
                                         <a href="{{ url('film/' .$item->id) }}" type="button"
                                             class="btn btn-sm btn-outline-secondary">View</a>
                                     </div>
                                     <small class="text-muted">9 mins</small>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </div>
 @endsection

 {{-- <h2>ppp</h2>
<h2>Id : {{$singleFilm->id}}</h2>
<h2>Judul Film : {{$singleFilm->judul}}</h2>
<h2>Deskripsi Film : {{$singleFilm->deskripsi}}</h2>
<h2>Deskripsi Film : {{$singleFilm ->deskripsi}}</h2>
<h3>Detail Film</h3>
    <h4>Code Film : {{$singleFilm->DetailFilm->code_film}}</h4>
    <h4>Url IMDB Film : {{$singleFilm->DetailFilm->url_indb}}</h4>
    <hr> --}}

 {{-- <h1>bapa</h1>
    @foreach ($detailFilm as $item)
        <h2>Id : {{$item->id}}</h2>
        <h2>Code Film : {{$item->code_film}}</h2>
        <h2>Deskripsi Film : {{$item ->url_indb}}</h2>
        <h3>Detail Film</h3>
             <h4>Judul Film : {{$item->film->judul}}</h4>
             <h4>Deskripsi Film : {{$item->film->deskripsi}}</h4>
        <hr>
@endforeach --}}


 {{-- <h1 style="color: blue">Media</h1>
@foreach ($MediaFilm as $item)

        <h2>Id : {{$item->id}}</h2>
        <h2>Id Film : {{$item->film_id}}</h2>
        <h2>Type Media : {{$item ->media_type}}</h2>
        <h3>Detail Film</h3>
             <h4>Media Title : {{$item->media_title}}</h4>
             <h4>Url Media : {{$item->url_media}}</h4>
             <hr>
@endforeach --}}
