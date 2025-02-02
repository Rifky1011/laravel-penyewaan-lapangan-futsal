<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lapangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #38a169, #3182ce);
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
            background: #f0f4f8;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        th {
            background: #3182ce;
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
            background: #38a169;
            color: white;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .nav a:hover {
            background: #2f855a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('penyewaan.index') }}">Tambah Penyewaan</a>
        </div>

        <h1>Daftar Lapangan</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lapangan</th>
                    <th>Harga Per Jam</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lapang Gordah</td>
                    <td>Rp100.000</td>
                    <td>Tersedia</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lapang Pesona</td>
                    <td>Rp130.000</td>
                    <td>Tersedia</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>SOR Ciateul</td>
                    <td>Rp250.000</td>
                    <td>Tersedia</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lapang Widuri</td>
                    <td>Rp110.000</td>
                    <td>Tersedia</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Lapang Sudirman</td>
                    <td>Rp125.000</td>
                    <td>Tersedia</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Lapang Cempaka</td>
                    <td>Rp130.000</td>
                    <td>Tersedia</td>
                </tr>
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('lapangan.create') }}" style="padding: 10px 20px; background: #6a89cc; color: white; text-decoration: none; border-radius: 5px;">Tambah Lapangan</a>
        </div>
    </div>
</body>
</html>
