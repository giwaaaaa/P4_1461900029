<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Kelas</title>
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

<h1>Data Kelas (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a href="{{url('siswa0029/')}}">Kembali ke Data Siswa</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kelas</th>
                    <th>ID Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Nama Guru</th>
                    <th>Mengajar</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($kelas as $kel)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kel->id_kelas}}</td>
                    <td>{{$kel->id}}</td>
                    <td>{{$kel->nama_siswa}}</td>
                    <td>{{$kel->nama_guru}}</td>
                    <td>{{$kel->mengajar}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>