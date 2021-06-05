<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Siswa</title>
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

<h1>Data Siswa (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route('siswa0029.create')}}">Tambah Data Siswa</a>

        <a href="{{url('kelas0029/')}}">Ke Data Kelas</a>

        <a href="{{url('filter_data0029/')}}">Mencari Data</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Alamat Siswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($siswa as $sis)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$sis->nama_siswa}}</td>
                    <td>{{$sis->alamat}}</td>
                    <td>
                        <a href="{{url('siswa0029/' . $sis->id . "/edit")}}">Edit</a>
                        |
                        <form action="{{url ('siswa0029/' . $sis->id)}}" method="post">
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