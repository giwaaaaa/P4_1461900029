<h1>Tambah Data Pasien (1461900029)</h1>

<a href="{{url('pasien0029/')}}">Kembali ke Data Pasien</a>
<br></br>


<form action="{{route('pasien0029.store')}}" method="post">
    @csrf
    Nama Pasien : <input type="text" name="nama_pasien">
    Alamat Pasien : <input type="text" name="alamat">
    <button type="submit">Simpan</button>
</form>