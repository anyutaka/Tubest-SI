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
    <h3 align="center">Laporan Data Gudang</h3>
    <table id="jasa" align="Center">
        <thead>
            <tr>
                <th>ID Gudang</th>
                <th>Nama Gudang</th>
                <th>Alamat Gudang</th>
                <th>Kapasitas</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id_gudang }}</td>
                    <td>{{ $row->nama_gudang }}</td>
                    <td>{{ $row->alamat_gudang }}</td>
                    <td>{{ $row->kapasitas }}</td>
                    <td>{{ $row->barang->nama_barang }}</td>
                    <td>{{ $row->jumlah_barang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
