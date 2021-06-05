<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Pelanggan</title>
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

<h1>Data Pelanggan (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route( 'pelanggan0029.create')}}">Tambah Data</a>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($pelanggan as $pel)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$pel->nama}}</td>
                    <td>{{$pel->alamat}}</td>
                    <td>
                        <a href="">Edit </a>
                        |
                        <a href=""> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>