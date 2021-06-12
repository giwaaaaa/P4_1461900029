<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
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


<body>
    <div style="overflow-x:auto;">
        <br>
            <center><h2>Data Dokter</h2></center>
        <br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Jabatan Dokter</th>
                </tr>
            </thead>
            <tbody>
                    <?php $no=1; ?>
                    @foreach ($dokter as $dok)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$dok->nama_dokter}}</td>
                        <td>{{$dok->jabatan}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>