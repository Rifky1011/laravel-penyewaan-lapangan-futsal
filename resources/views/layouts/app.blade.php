<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Sewa Lapangan</a>
            <div>
                <a href="{{ route('dashboard') }}" class="text-white">Dashboard</a>
                <a href="{{ route('penyewaan.create') }}" class="text-white ms-3">Penyewaan</a>
                <a href="{{ route('logout') }}" class="text-white ms-3">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
