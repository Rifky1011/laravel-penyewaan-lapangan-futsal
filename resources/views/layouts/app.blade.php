<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right,rgb(53, 190, 115),rgb(126, 255, 184));
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .welcome-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh;
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Sewa Lapangan</a>
            <div class="navbar-nav d-flex flex-row">
                <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                <a href="{{ route('penyewaan.create') }}" class="nav-link">Penyewaan</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link text-white ms-3 p-0">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="welcome-text">
        <div>Hi Sob, Selamat Datang Di Sistem Kami,</div>
        <div>Manyalaaa Wiiii</div>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
