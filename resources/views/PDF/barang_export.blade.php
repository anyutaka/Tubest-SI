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
    <h3 align="center">Laporan Data Barang</h3>
    <table id="jasa" align="Center">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_barang }}</td>
                    <td>{{ $row->nama_barang }}</td>
                    <td>{{ $row->kategori }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>{{ $row->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
