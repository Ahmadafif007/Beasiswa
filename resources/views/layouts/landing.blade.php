<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Menggunakan Bootstrap CSS versi 5.3.0-alpha3 dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Menggunakan file CSS kustom dari direktori /css/ -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Menentukan judul halaman dengan menggunakan data yang diberikan oleh yield('title') -->
    <title>@yield('title') - SERKOM</title>

    <!-- Memasukkan jQuery dari CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    {{-- Tampilan Navbar --}}

    <!-- Navbar dengan latar belakang warna merah (bg-danger) -->
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <!-- Logo atau teks sebagai brand navbar dengan warna teks putih -->
            <a class="navbar-brand text-light">Institut Teknologi Telkom Purwokerto</a>
            <!-- Tombol toggler untuk menu responsif pada perangkat kecil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Daftar menu navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Menu Informasi Beasiswa -->
                    <li class="nav-item">
                        <a class="m-2 @if (Request::is('list-beasiswa', 'list-beasiswa/*')) btn btn-light @else btn btn-outline-light @endif"
                            href="{{ route('list-beasiswa') }}" role="button">Informasi Beasiswa</a>
                    </li>
                    <!-- Menu Daftar Beasiswa -->
                    <li class="nav-item ">
                        <a class="m-2 @if (Request::is('daftar-beasiswa', 'daftar-beasiswa/*')) btn btn-light @else btn btn-outline-light @endif"
                            href="{{ route('daftar-beasiswa') }}">Daftar Beasiswa</a>
                    </li>
                    <!-- Menu Hasil Pendaftaran -->
                    <li class="nav-item ml-2">
                        <a class="m-2 @if (Request::is('hasil', 'hasil/*')) btn btn-light @else btn btn-outline-light @endif"
                            href="{{ route('hasil') }}">Hasil Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Navbar end --}}

    {{-- Main content --}}
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    {{-- Main content end --}}

    {{-- Footer --}}
    <footer>
        <!-- Bagian bawah halaman (footer) dengan background warna merah (bg-danger) -->
        <div class="text-center p-3 bg-danger">
            <!-- Teks putih pada tengah div -->
            <span class="text-white">© 2024 Copyright:</span>
            <!-- Tautan (link) dengan teks putih tanpa URL (href) -->
            <a class="text-white">Ahmad Afif Wildan</a>
        </div>
    </footer>
    {{-- Footer end --}}

    @stack('scripts')
    <!-- Menambahkan script Popper.js untuk menangani dependensi dropdown Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <!-- Menambahkan script Bootstrap untuk menangani komponen UI Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>
