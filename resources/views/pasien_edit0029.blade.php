<h1>Edit Data Pasien (1461900029)</h1>

<a href="{{url('pasien0029/')}}">Kembali ke Data Pasien</a>
<br></br>


<form action="{{url('pasien0029/' . $pasien->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Nama Pasien : <input type="text" name="nama_pasien" value="{{$pasien->nama_pasien}}">
    Alamat Pasien : <input type="text" name="alamat" value="{{$pasien->alamat}}">
    <button type="submit">Simpan</button>
</form>