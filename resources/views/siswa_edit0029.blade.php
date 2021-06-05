<h1>Edit Data Siswa (1461900029)</h1>

<a href="{{url('siswa0029/')}}">Kembali ke Data Siswa</a>
<br></br>


<form action="{{url('siswa0029/' . $siswa->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Nama Siswa : <input type="text" name="nama" value="{{$siswa->nama}}">
    Alamat Alamat : <input type="text" name="alamat" value="{{$siswa->alamat}}">
    <button type="submit">Simpan</button>
</form>