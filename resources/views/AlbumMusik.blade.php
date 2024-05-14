   @php
    $AlbumMusik = \App\Models\AlbumMusik::all();
    $album2 = \App\Models\AlbumMusik::where('id',1)->orderBy('id','desc')->get();
    $album3 = \App\Models\AlbumMusik::where('cover_album','The 2000s Greatest')->orderBy('id','desc')->get();
    $album4 = \App\Models\AlbumMusik::where('cover_album','Mabuk Laut')->orderBy('id','desc')->first();
    $album5 = \App\Models\AlbumMusik::where('cover_album','The 2000s Greatest')->orderBy('id','desc')->find(3);
   @endphp

   <h1 style="color:blue">halaman 1</h1>
   @foreach ($AlbumMusik as $data)
        <h1>Id : {{$data->id  ?? 'kosong'}}</h1>
        <h1>Judul : {{$data->judul ?? 'kosong'}}</h1>
        <h1>Tahun : {{$data->tahun ?? 'kosong'}}</h1>
        <h1>Cover Album : {{$data->cover_album ?? 'kosong'}}</h1>
        
   @endforeach
<hr>
  <h1 style="color:rgb(0, 255, 68)">halaman 2</h1>
   @foreach ($album3 as $data)
        <h1>Id : {{$data->id  ?? 'kosong'}}</h1>
        <h1>Judul : {{$data->judul ?? 'kosong'}}</h1>
        <h1>Tahun : {{$data->tahun ?? 'kosong'}}</h1>
        <h1>Cover Album : {{$data->cover_album ?? 'kosong'}}</h1>
        
   @endforeach
<hr>
<h1 style="color:rgb(255, 115, 0)">halaman 3</h1>
        <h1>Id : {{$album4->id  ?? 'kosong'}}</h1>
        <h1>Judul : {{$album4->judul ?? 'kosong'}}</h1>
        <h1>Tahun : {{$album4->tahun ?? 'kosong'}}</h1>
        <h1>Cover Album : {{$album4->cover_album ?? 'kosong'}}</h1>
        <hr>
        
<h1 style="color:rgb(0, 225, 255)">halaman 4</h1>
        <h1>Id : {{$album5->id  ?? 'kosong'}}</h1>
        <h1>Judul : {{$album5->judul ?? 'kosong'}}</h1>
        <h1>Tahun : {{$album5->tahun ?? 'kosong'}}</h1>
        <h1>Cover Album : {{$album5->cover_album ?? 'kosong'}}</h1>
        <hr>