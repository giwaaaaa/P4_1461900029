<h1>Tambah Data Siswa (1461900029)</h1>

<a href="{{url('siswa0029/')}}">Kembali ke Data Siswa</a>
<br></br>


<form action="{{route('siswa0029.store')}}" method="post">
    @csrf
    Nama Siswa : <input type="text" name="nama">
    Alamat Siswa : <input type="text" name="alamat">
    <button type="submit">Simpan</button>
</form>