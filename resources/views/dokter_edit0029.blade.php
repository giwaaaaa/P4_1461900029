<h1>Edit Data Dokter (1461900029)</h1>

<a href="{{url('dokter0029/')}}">Kembali ke Data Dokter</a>
<br></br>


<form action="{{url('dokter0029/' . $dokter->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Nama Dokter : <input type="text" name="nama_dokter" value="{{$dokter->nama_dokter}}">
    Jabatan Dokter : <input type="text" name="jabatan" value="{{$dokter->jabatan}}">
    <button type="submit">Simpan</button>
</form>