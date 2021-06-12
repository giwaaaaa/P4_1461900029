<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Kamar</title>
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

<h1>Data Kamar (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a href="{{url('pasien0029/')}}">Kembali ke Data Pasien |</a>

        <a href="{{url('kamarjoin0029/')}}">Kembali ke Data Kamar Berisi Pasien dan Dokter |</a>

        <a href="{{url('dokter0029/')}}">Kembali ke Data Dokter |</a>

        <a class="tambah" href="{{route('kamar0029.create')}}">Tambah Data Kamar |</a>

        <a class="tambah" href="{{url('/kamar/pdf')}}">Print Ke PDF</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kamar</th>
                    <th>ID Pasien</th>
                    <th>ID Dokter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($kamar as $kam)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kam->id}}</td>
                    <td>{{$kam->id_pasien}}</td>
                    <td>{{$kam->id_dokter}}</td>
                    <td>
                        <a href="{{url('kamar0029/' . $kam->id . "/edit")}}">Edit</a>
                        |
                        <form action="{{url ('kamar0029/' . $kam->id)}}" method="post">
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