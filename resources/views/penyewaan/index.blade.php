<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penyewaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f8c291, #6a89cc);
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
            background: #f0e6ef;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        th {
            background: #6a89cc;
            color: white;
        }
        .nav {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav a {
            text-decoration: none;
            margin: 0 10px;
            padding: 10px 20px;
            background: #f8c291;
            color: white;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .nav a:hover {
            background: #e77f67;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('penyewaan.index') }}">Daftar Penyewaan</a>
            <a href="{{ route('lapangan.index') }}">Lapangan</a>
        </div>
        
        <h1>Daftar Penyewaan</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Lapangan ID</th>
                    <th>Nama Lapangan</th>
                    <th>Harga Per Jam</th>
                    <th>Waktu Mulai</th>
                    <th>Waktu Selesai</th>
                    <th>Durasi (Jam)</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyewaan as $penyewaan)
                    <tr>
                        <td>{{ $penyewaan->id }}</td>
                        <td>{{ $penyewaan->user_id }}</td>
                        <td>{{ $penyewaan->lapangan_id }}</td>
                        <td>{{ $penyewaan->lapangan->nama }}</td>
                        <td>{{ number_format($penyewaan->lapangan->harga_per_jam, 0, ',', '.') }}</td>
                        <td>{{ $penyewaan->waktu_mulai }}</td>
                        <td>{{ $penyewaan->waktu_selesai }}</td>
                        <td>{{ (strtotime($penyewaan->waktu_selesai) - strtotime($penyewaan->waktu_mulai)) / 3600 }}</td>
                        <td>{{ number_format($penyewaan->total_harga, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('penyewaan.create') }}" style="padding: 10px 20px; background: #6a89cc; color: white; text-decoration: none; border-radius: 5px;">Tambah Penyewaan</a>
        </div>
    </div>
</body>
</html>
