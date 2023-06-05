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
    <h3 align="center">Laporan Data Pengiriman</h3>
    <table id="jasa" align="Center">
        <thead>
            <tr>
                <th>ID Jadwal</th>
                <th>Status</th>
                <th>Estimasi Sampai</th>>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->jadwal->id_jadwal }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->estimasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
