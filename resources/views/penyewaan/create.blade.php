<!-- resources/views/penyewaan/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penyewaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #a8e6cf, #dcedc1);
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        nav {
            text-align: center;
            margin-bottom: 20px;
        }
        nav a {
            text-decoration: none;
            color: #ffffff;
            background-color: #70c1b3;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
            display: inline-block;
        }
        nav a:hover {
            background-color: #56a59c;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        select, input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #f7f7f7;
        }
        button {
            background-color: #ff847c;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        button:hover {
            background-color: #e76f6f;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('lapangan.index') }}">Daftar Lapangan</a>
        <a href="{{ route('penyewaan.index') }}">Riwayat Penyewaan</a>
    </nav>
    <div class="container">
        <h1>Form Penyewaan Lapangan</h1>

        @if(session('success'))
            <div style="background-color: #4CAF50; color: white; padding: 10px; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('penyewaan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="lapangan">Pilih Lapangan:</label>
                <select name="lapangan_id" id="lapangan" required>
                    <option value="" data-harga="0">-- Pilih Lapangan --</option>
                    @foreach($lapangan as $l)
                        <option value="{{ $l->id }}" data-harga="{{ $l->harga_per_jam }}">
                            {{ $l->nama }} - Rp{{ number_format($l->harga_per_jam, 0, ',', '.') }}/jam
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="durasi">Durasi (jam):</label>
                <input type="number" name="durasi" id="durasi" min="1" required>
            </div>

            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <input type="text" name="total_harga" id="total_harga" readonly>
            </div>

            <button type="submit">Sewa Lapangan</button>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lapanganSelect = document.getElementById("lapangan");
            const durasiInput = document.getElementById("durasi");
            const totalHargaInput = document.getElementById("total_harga");

            function hitungTotal() {
                const hargaPerJam = parseInt(lapanganSelect.options[lapanganSelect.selectedIndex].getAttribute("data-harga")) || 0;
                const durasi = parseInt(durasiInput.value) || 0;
                const total = hargaPerJam * durasi;
                totalHargaInput.value = total ? `Rp${total.toLocaleString("id-ID")}` : "";
            }

            lapanganSelect.addEventListener("change", hitungTotal);
            durasiInput.addEventListener("input", hitungTotal);
        });
    </script>    
</body>
</html>
