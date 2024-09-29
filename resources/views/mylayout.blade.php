<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--My Style-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <!--Link Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" />
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <!--Navbar-->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Toggler untuk menu pada mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Konten Navbar -->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <!-- Link yang tetap di sebelah kiri -->
                            <a class="nav-link active me-2 text-white fw-bold" aria-current="page" href="#hero">
                                <img src="img/logoGadis.png" alt="" width="45"
                                    class="d-inline-block align-text " />
                                {{ env('APP_NAME') }}</a>
                        </div>
                        <div class="navbar-nav ms-auto nav-hover">
                            <a class="nav-link fw-bold text-white" href="#about">TENTANG</a>
                            <a class="nav-link fw-bold text-white" href="#produk">PRODUK</a>
                            <a class="nav-link fw-bold text-white" href="#kontak">KONTAK</a>
                        </div>

                        <!-- Elemen ini akan dipindahkan ke kanan -->
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link me-3 fw-bold text-white" href="login.html">MASUK</a>
                            <a class="nav-link fw-bold text-white" href="#">DAFTAR</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <main class="container">
        @if (session()->has('pesan'))
            <div class="alert alert-info mt-3" role="alert">
                {{ session('pesan') }}
            </div>
        @endif
        @include('flash::message')
        @yield('content')
    </main>
    <!--End Navbar-->
