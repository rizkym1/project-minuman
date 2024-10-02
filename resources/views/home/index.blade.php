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
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css" />

    <!--Link Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" />
    <title>Gadis Manies</title>
</head>

<body>
    <!--Navbar-->
    <div class="container-fluid position-fixed" id="nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3">
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
                            <a class="nav-brand active me-3" aria-current="page" href="#hero">
                                <img src="{{ asset('assets') }}/img/logoGadis.png" alt="" width="45"
                                    class="d-inline-block align-text" />GADIS MANIES</a>
                        </div>
                        <div class="navbar-nav ms-auto nav-hover">
                            <a class="nav-link fw-bold" href="#about">TENTANG</a>
                            <a class="nav-link fw-bold" href="#produk">PRODUK</a>
                            <a class="nav-link fw-bold" href="#kontak">KONTAK</a>
                        </div>

                        <!-- Elemen ini akan dipindahkan ke kanan -->
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link me-3 fw-bold" href="login.html">MASUK</a>
                            <a class="nav-link fw-bold" href="#">DAFTAR</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!--End Navbar-->
    <!--Section Hero-->
    <section id="hero">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-5 col-md-5 offset-lg-1 my-auto order-1 text-center text-lg-start">
                    <h1 class="fw-bold">Selamat Datang di Gadis Manies</h1>
                    <p>
                        UMKM di bidang kuliner, dengan produk andalan Fruit Cocktail Jelly
                        Ball dan Iced Choco Kental yang berdiri dari tahun 2020. Hanya di
                        hari minggu, area BMX Ciamis.
                    </p>
                    <button class="btn btn-custom1 my-1">
                        Pesan Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 38.044 31.65">
                            <g id="right-arrow" transform="translate(0 -41.346)">
                                <g id="Group_23" data-name="Group 23" transform="translate(0 41.346)">
                                    <path id="Path_2" data-name="Path 2"
                                        d="M37.436,55.693,23.7,41.953a2.088,2.088,0,0,0-2.945,0L19.5,43.2a2.067,2.067,0,0,0-.608,1.472,2.107,2.107,0,0,0,.608,1.49L27.52,54.2H2.055A2.032,2.032,0,0,0,0,56.243v1.764a2.11,2.11,0,0,0,2.055,2.138H27.61L19.5,68.222a2.062,2.062,0,0,0,0,2.924l1.247,1.244a2.089,2.089,0,0,0,2.945,0L37.436,58.648a2.1,2.1,0,0,0,0-2.955Z"
                                        transform="translate(0 -41.346)" fill="#fff" />
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="col-lg-5 col-md-6 order-md-2">
                    <img src="{{ asset('assets') }}/img/buy.png" width="90%" class="float-lg-end mx-auto d-block"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!--End Section Hero-->
    <!--About-->
    <section id="about">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h1 class="text-center fw-bold">Tentang</h1>
                        <hr />
                    </div>
                    <div class="row align-items-center">
                        <!-- Kolom kiri untuk teks -->
                        <div class="col-lg-6 col-md-12 mt-5">
                            <h1 class="fw-bold">Gadis Manies</h1>
                            <p class="text-start color-acsent">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Ipsa iusto molestiae, soluta reiciendis expedita quos alias veniam aut nisi quibusdam.
                                Nostrum voluptate temporibus commodi reprehenderit! Maxime a praesentium voluptas
                                molestias.</p>
                            <p class="text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam libero
                                sit obcaecati dolore dolor debitis odit cupiditate. Soluta, aliquam aspernatur
                                consequuntur eaque quibusdam earum excepturi, ut at tempore architecto recusandae.</p>
                        </div>
                        <!-- Kolom kanan untuk gambar -->
                        <div class="col-lg-6 col-md-12 mt-5">
                            <img src="{{ asset('assets') }}/img/gadis.jpg" class="img-fluid rounded-circle"
                                alt="gambar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End About-->

    <!--produk-->
    <section id="produk">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h1 class="fw-bold text-center">Produk</h1>
                        <hr />
                    </div>
                </div>
                <div class="container mt-5 position-relative">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 d-flex justify-content-center">
                            <div class="position-relative card-produk">
                                <img src="{{ asset('assets') }}/img/minum.jpg" alt="" />
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                    <div
                                        class="w-100 produk-detail text-center position-absolute top-50 start-50 translate-middle">
                                        <h5>Iced Chocho Kental</h5>
                                        <span>Minuman dingin yang dibuat dari coklat</span>
                                        <h6>IDR. 200JT</h6>
                                        <button>Pesan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-3">
                                <div class="position-relative card-produk">
                                    <img src="{{ asset('assets') }}/img/garbal.jpg" alt="" />
                                    <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                        <div
                                            class="w-100 produk-detail text-center position-absolute top-50 start-50 translate-middle">
                                            <h5>Fruit Cocktail Jelly Ball</h5>
                                            <span>Kombinasi antara jelly dengan aneka buah yang segar</span>
                                            <h6>IDR. 200JT</h6>
                                            <button>Pesan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--End produk-->
    <!--Kontak-->
    <section id="kontak">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 lh-lg">
                        <h3 class="fw-bold">Silahkan Kontak Kami, Kami Siap Membantu</h3>
                        <div class="kontak">
                            <h6 class="mt-4">Kontak</h6>

                            <div class="alamat">
                                <img src="{{ asset('assets') }}/img/Alamat Icon.png" alt="" />
                                <a href="#" class="d-inline-block w-lg-50 align-middle lh-sm">Kota Ciamis Jawa
                                    Barat</a>
                            </div>

                            <div class="whatsapp">
                                <img src="{{ asset('assets') }}/img/Whatsapp icon.png" alt="" />
                                <a href="#">022-655422321</a>
                            </div>

                            <div class="email">
                                <img src="{{ asset('assets') }}/img/Email Icon.png" alt="" />
                                <a href="#">gadismanies@gmail.com</a>
                            </div>

                            <h6 class="mt-4">Social Media</h6>
                            <a href="#"><img src="{{ asset('assets') }}/img/Facebook Icon.png"
                                    alt="" /> </a>
                            <a href="#"><img src="{{ asset('assets') }}/img/Twiter Icon.png"
                                    alt="" /></a>
                            <a href=""><img src="{{ asset('assets') }}/img/Instagram Iicon.png"
                                    alt="" /></a>
                            <a href="#">Gadis Manies</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-contact w-100">
                            <form>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" />
                                    <label for="floatingInput" class="d-flex align-items-center">Nama Anda</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" />
                                    <label for="floatingInput" class="d-flex align-items-center">Ada
                                        Pertanyaan..?</label>
                                </div>

                                <button type="submit" class="button-kontak">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Kontak-->
    <!--Footer-->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  text-center">
                    <img src="{{ asset('assets') }}/img/logoGadis.png" alt="" width="10%" />
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <p class="text-light">Copyright by Rizky Maulana All Right Reserved 2024</p>
                </div>
                <div class="social-icon-footer text-center">
                    <img class="icon" src="{{ asset('assets') }}/img/Facebook Icon.png" alt="">
                    <img class="icon" src="{{ asset('assets') }}/img/Twiter Icon.png" alt="">
                    <img class="icon" src="{{ asset('assets') }}/img/Instagram Iicon.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <script src="{{ asset('assets') }}/js/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
