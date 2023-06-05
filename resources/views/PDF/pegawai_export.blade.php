<!DOCTYPE html>
<html>

<head>
    <style>
        #jasa {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #jasa td,
        #jasa th {
            border: 1px solid #cecece;
            padding: 8px;
        }

        #jasa tr:nth-child(even) {
            background-color: #d4d4d4;
        }

        #jasa tr:hover {
            background-color: #ddd;
        }

        #jasa th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ababab;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3 align="center">Laporan Data Pegawai</h3>
    <table id="jasa" align="Center">
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>User</th>
                <th>Gudang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $a)
                <tr>
                    <td>{{ $a->id_pegawai }}</td>
                    <td>{{ $a->nama_pegawai }}</td>
                    <td>{{ $a->alamat }}</td>
                    <td>{{ $a->no_telp }}</td>
                    <td>{{ $a->user->email }}</td>
                    <td>{{ $a->user->id_user }}</td>
                    <td>{{ $a->gudang->nama_gudang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
