 @php 

//$siswa = \App\Models\Siswa::where('kelas','XI RPL 2')
        //->orderby('id','desc')
        //->take(100)
        //->where('nama','Azril')
        //->where('jenis_kelamin','0')
        //->groupby('id')
        //->get();

    $siswa = \App\Models\Siswa::find(2);
    $siswa2 = \App\Models\Siswa::where('id',1)->orderBy('id','desc')->get();
    $siswa3 = \App\Models\Siswa::where('kelas','XI RPL 2')->orderBy('id','desc')->first();

// $sekolah = \App\Models\Sekolah::all();

@endphp
{{-- 
        <h1>Tanpa Foreach</h1>
        <h1>Id : {{$siswa->id ?? 'kosong'}}</h1>
        <h1>Nama : {{$siswa->nama ?? 'kosong'}}</h1>
        <h1>Kelas : {{$siswa->kelas ?? 'kosong'}}</h1>
        <h1>Jenis Kelamin : {{$siswa->jenis_kelamin ?? 'kosong'}}</h1>
        <hr> --}}

        <h1>First</h1>
        <h1>Tanpa Foreach</h1>
        <h1>Id : {{$siswa3->id ?? 'kosong'}}</h1>
        <h1>Nama : {{$siswa3->nama ?? 'kosong'}}</h1>
        <h1>Kelas : {{$siswa3->kelas ?? 'kosong'}}</h1>
        <h1>Jenis Kelamin : {{$siswa3->jenis_kelamin ?? 'kosong'}}</h1>
        <hr>


{{-- @foreach ($sekolah as $data)
        <h1>Nama : {{$data->nama}}</h1>
        <h1>Alamat : {{$data->alamat}}</h1>
        <h1>Email : {{$data->email}}</h1>
        <h1>Telepon : {{$data->telepon}}</h1>
        <h1>Status : {{$data->status}}</h1>
    
@endforeach --}}

