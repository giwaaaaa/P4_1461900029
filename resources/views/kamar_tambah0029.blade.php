<h1>Tambah Data Kamar (1461900029)</h1>

<a href="{{url('kamar0029/')}}">Kembali ke Data Kamar</a>
<br></br>


<form action="{{route('kamar0029.store')}}" method="post">
    @csrf
    ID Kamar : <input type="text" name="id">
    ID Pasien : <input type="text" name="id_pasien">
    ID Dokter : <input type="text" name="id_dokter">
    <button type="submit">Simpan</button>
</form>