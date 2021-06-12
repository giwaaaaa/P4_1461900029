<h1>Tambah Data Dokter (1461900029)</h1>

<a href="{{url('dokter0029/')}}">Kembali ke Data Dokter</a>
<br></br>


<form action="{{route('dokter0029.store')}}" method="post">
    @csrf
    Nama Dokter : <input type="text" name="nama_dokter">
    Jabatan Dokter : <input type="text" name="jabatan">
    <button type="submit">Simpan</button>
</form>