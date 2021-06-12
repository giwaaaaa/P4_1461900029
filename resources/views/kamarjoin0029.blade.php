<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Kamar Berisi Pasien dan Dokter</title>
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

<h1>Data Kamar Berisi Pasien dan Dokter (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a href="{{url('pasien0029/')}}">Kembali ke Data Pasien |</a>

        <a href="{{url('dokter0029/')}}">Kembali ke Data Dokter |</a>

        <a class="tambah" href="{{url('/kamarjoin/pdf')}}">Print Ke PDF</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kamar</th>
                    <th>ID Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Alamat Pasien</th>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Jabatan Dokter</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($kamarjoin as $karjo)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$karjo->id}}</td>
                        <td>{{$karjo->id_pasien}}</td>
                        <td>{{$karjo->nama_pasien}}</td>
                        <td>{{$karjo->alamat}}</td>
                        <td>{{$karjo->id_dokter}}</td>
                        <td>{{$karjo->nama_dokter}}</td>
                        <td>{{$karjo->jabatan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>