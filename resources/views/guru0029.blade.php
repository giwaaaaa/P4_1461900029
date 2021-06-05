<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Guru</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>

<h1>Data Guru (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route( 'guru0029.create')}}">Tambah Data Guru</a>
        
        <a href="{{url('siswa0029/')}}">Kembali ke Data Siswa</a>

        <a href="{{url('filter_data0029/')}}">Mencari Data</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Mengajar Apa?</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($guru as $gur)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$gur->nama}}</td>
                    <td>{{$gur->mengajar}}</td>
                    <td>
                        <a href="{{url('guru0029/' . $gur->id . "/edit")}}">Edit </a>
                        |
                        <form action="{{url ('guru0029/' . $gur->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>