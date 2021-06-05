<h1>Tambah Data Guru (1461900029)</h1>


<a href="{{url('guru0029/')}}">Kembali ke Data Guru</a>
<br></br>

<form action="{{route('guru0029.store')}}" method="post">
    @csrf
    Nama Guru : <input type="text" name="nama">
    Mengajar Apa? : <input type="text" name="mengajar">
    <button type="submit">Simpan</button>
</form>

