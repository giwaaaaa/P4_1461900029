<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Dokter</title>
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

<h1>Data Dokter (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a href="{{url('pasien0029/')}}">Kembali ke Data Pasien |</a>

        <a href="{{url('kamarjoin0029/')}}">Kembali ke Data Kamar Berisi Pasien dan Dokter |</a>

        <a href="{{url('kamar0029/')}}">Kembali ke Data Kamar |</a>

        <a class="tambah" href="{{route('dokter0029.create')}}">Tambah Data Dokter |</a>

        <a class="tambah" href="{{url('/dokter/pdf')}}">Print Ke PDF |</a>

        <a href="{{url('importdokter0029')}}">Import Data Dokter</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Jabatan Dokter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($dokter as $dok)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$dok->id}}</td>
                    <td>{{$dok->nama_dokter}}</td>
                    <td>{{$dok->jabatan}}</td>
                    <td>
                        <a href="{{url('dokter0029/' . $dok->id . "/edit")}}">Edit</a>
                        |
                        <form action="{{url ('dokter0029/' . $dok->id)}}" method="post">
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