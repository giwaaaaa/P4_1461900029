<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Pasien</title>
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

<h1>Data Pasien (1461900029)</h1>


<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route('pasien0029.create')}}">Tambah Data Pasien |</a>

        <a class="tambah" href="{{url('/pasien/pdf')}}">Print Ke PDF |</a>

        <a href="{{url('importpasien0029')}}">Import Data Pasien |</a>

        <a href="{{url('dokter0029/')}}">Ke Data Dokter |</a>

        <a href="{{url('kamar0029/')}}">Ke Data Kamar |</a>

        <a href="{{url('kamarjoin0029/')}}">Ke Data Kamar Berisi Pasien dan Dokter</a>
        <br></br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Alamat Pasien</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($pasien as $pas)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$pas->nama_pasien}}</td>
                    <td>{{$pas->alamat}}</td>
                    <td>
                        <a href="{{url('pasien0029/' . $pas->id . "/edit")}}">Edit</a>
                        |
                        <form action="{{url ('pasien0029/' . $pas->id)}}" method="post">
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