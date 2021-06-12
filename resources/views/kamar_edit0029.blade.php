<h1>Edit Data Kamar (1461900029)</h1>

<a href="{{url('kamar0029/')}}">Kembali ke Data Kamar</a>
<br></br>


<form action="{{url('kamar0029/' . $kamar->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    ID Kamar : <input type="text" name="id" value="{{$kamar->id}}">
    ID Pasien : <input type="text" name="id_pasien" value="{{$kamar->id_pasien}}">
    ID Dokter : <input type="text" name="id_dokter" value="{{$kamar->id_dokter}}">
    <button type="submit">Simpan</button>
</form>