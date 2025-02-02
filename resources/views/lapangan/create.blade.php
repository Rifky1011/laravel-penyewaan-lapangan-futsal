<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lapangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-4xl bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
        <header class="border-b pb-4 mb-4">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 text-center">
                Tambah Lapangan
            </h2>
        </header>
        <form action="{{ route('lapangan.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium text-gray-800 dark:text-gray-200">Nama Lapangan</label>
                <input type="text" name="name" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block font-medium text-gray-800 dark:text-gray-200">Harga per Jam</label>
                <input type="number" name="price_per_hour" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block font-medium text-gray-800 dark:text-gray-200">Deskripsi</label>
                <textarea name="description" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Simpan
            </button>
        </form>
    </div>
</body>
</html>
