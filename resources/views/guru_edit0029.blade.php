<h1>Edit Data Guru (1461900029)</h1>

<a href="{{url('guru0029/')}}">Kembali ke Data Guru</a>
<br></br>


<form action="{{url('guru0029/' . $guru->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Nama Guru : <input type="text" name="nama" value="{{$guru->nama}}">
    Mengajar Apa? : <input type="text" name="mengajar" value="{{$guru->mengajar}}">
    <button type="submit">Simpan</button>
</form>