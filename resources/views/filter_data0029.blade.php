<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Filter Data Kelas & Mengajar</title>
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
    
    <h1>Filter Data Kelas & Mengajar (1461900029)</h1>
    
    
    <body>
        <div class="form-group">
            <label>Siswa : </label>
            <select name="nama" id="nama" class="form-control" required>
              <option value="">==Pilih Siswa==</option>
              @foreach($siswa as $sis)
              <option>{{$sis}}</option>
              @endforeach
            </select>
          </div>

    </body>